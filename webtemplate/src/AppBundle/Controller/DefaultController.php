<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').
                DIRECTORY_SEPARATOR,
        ]);

    }

     /**
     * @Route("/empleats", name="empleats")

     */
    public function empleatsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/empleats.html.twig');
    }

       /**
     * @Route("/oficines", name="oficines")

     */
    public function oficinesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/oficines.html.twig');
    }

        /**
     * @Route("/projectes", name="projectes")

     */
    public function projectesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/projectes.html.twig');
    }

    /**
     * @Route("/clients", name="clients")

     */
    public function clientsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/clients.html.twig');
    }

    /**
     * @Route("/about", name="about")

     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig');
    }


}

