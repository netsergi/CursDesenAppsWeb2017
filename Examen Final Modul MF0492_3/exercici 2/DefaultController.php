<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/work", name="work")
     */
    public function workAction(Request $request)
    {
        return $this->render('default/work.html.twig');
    }

     /**
     * @Route("/price", name="price")
     */
    public function priceAction(Request $request)
    {
        return $this->render('default/price.html.twig');
    }

    //Creo els controladors corresponents amb les rutes de cadascuna de les webs, cada funcio renderitza la plantilla twig corresponent.
}
