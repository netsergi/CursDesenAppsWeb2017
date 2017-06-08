<?php
// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;
use Symfony\Component\HttpFoundation\Request;


class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }


    public function aboutAction()
    {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }

 	public function contactAction(Request $request)
	{
		$enquiry = new Enquiry();
	    $form = $this->createForm(EnquiryType::class, $enquiry);
	    if ($request->getMethod() == 'POST') {
	        $form->handleRequest($request);
	        if ($form->isValid()) {
	        	/*$file = fopen(dirname(__DIR__)."/contactlog.txt","a");
	      		fwrite($file, $enquiry->getName()." | ".$enquiry->getEmail(). " | " . date('d-m-Y'). " | ". $request->getClientIp(). "\n");
	      		fclose($file); */
	      	$enquiry->getDepartament();
	      	$message = \Swift_Message::newInstance()
            ->setSubject('Contact enquiry from symblog')
            ->setFrom('enquiries@symblog.co.uk')
            ->setTo($this->container->getParameter('blogger_blog.emails.departament.'.$enquiry->getDepartament()))
            ->setCc('manu.villar.vitoria@gmail.com')
            ->setBody($this->renderView('BloggerBlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
        	$this->get('mailer')->send($message);
	        $this->get('session')->getFlashBag()->add('blogger-notice', 'Your contact enquiry was successfully sent to departament '. $enquiry->getDepartament() . '. Thank you!');
		        return $this->redirect($this->generateUrl('BloggerBlogBundle_contact'));
		    }
	    }
	    return $this->render('BloggerBlogBundle:Page:contact.html.twig', array(
	        'form' => $form->createView()
	    ));
	}

}