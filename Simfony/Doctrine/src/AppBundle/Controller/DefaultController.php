<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use AppBundle\Entity\Product;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $repositori = $em->getRepository('AppBundle:Product');
        $product = $repositori->findAll();
        return $this->render('default/index.html.twig',array('product'=>$product));
    }

       /**
         * @Route("/show/{id}", name="show", requirements={"id": "\d+"}))
         */
        public function showAction(Request $request)
        {
            $id = $request->get('id');
            $em = $this->get('doctrine')->getManager();
            $product = $em->getRepository('AppBundle:Product')
        ->find($id);

            if (!$product) {
                throw $this->createNotFoundException(
                    'No product found for id '.$productId);
            }
            return $this->render('default/show.html.twig',array('producto'=>$product));
        }

         /**
         * @Route("/edit/{id}", name="edit", requirements={"id": "\d+"}))
         */
        public function editAction(Request $request)
        {
            $id = $request->get('id');
            $em = $this->get('doctrine')->getManager();
            $product = $em->getRepository('AppBundle:Product')
        ->find($id);

            if (!$product) {
                throw $this->createNotFoundException(
                    'No product found for id '.$productId);
            }

            if ($request->isMethod('POST')) {
                $em = $this->get('doctrine')->getManager();
                $product = $em->getRepository('AppBundle:Product')->find($request->get('id'));

                if (!$product) {
                    throw $this->createNotFoundException(
                        'No product found for id ');
                }
                $product->setName($request->get('name'));
                $product->setPrice($request->get('price'));
                $product->setDescription($request->get('description'));
                $product->setShortdescription($request->get('shortdescription'));
                $em->flush();
                $id = $request->get('id');
                return $this->redirectToRoute('show',array('id'=>$id));
            }
            
            return $this->render('default/edit.html.twig',array('producto'=>$product));
        }

          /**
         * @Route("/create" , name="create")
         */
         public function createAction(Request $request)
         {
           if ($request->isMethod('POST')) {
            $em = $this->get('doctrine')->getManager();
                $product = new Product();
                $product->setName($request->get('name'));
                $product->setPrice($request->get('price'));
                $product->setDescription($request->get('description'));
                $product->setShortdescription($request->get('shortdescription'));
                $product->setPostedAt(new \Datetime());
                $em->persist($product);
                $em->flush();
                return $this->redirectToRoute('homepage',array('producto'=>$product));
            }          

            return $this->render('default/create.html.twig');
        }

          /**
         * @Route("/delete/{id}", name="delete", requirements={"id": "\d+"}))
         */
         public function deleteAction(Request $request)
         {
                $id = $request->get('id');
                $em = $this->get('doctrine')->getManager();
                $product = $em->getRepository('AppBundle:Product')
        ->find($id);
                $em->remove($product);
                $em->flush();
                $this->addFlash('notice','Eliminat el producte: '.$product->getName(). ' amb id: '. $id);    
                return $this->redirectToRoute('homepage');
        }

         /**
         * @Route("/llistat" , name="llistat")
         */
         public function llistatAction(Request $request)
         {
            
                if ($request->isMethod('POST')) {
                    $price = $request->get('price');
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM AppBundle:Product p
                        WHERE p.price > :price
                        ORDER BY p.price ASC'
                    )->setParameter('price', $price);
                    $product = $query->getResult(); 
                }
                return $this->render('default/index.html.twig',array('product'=>$product));
        }
}
