<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction(Request $request)
    {
        return $this->render('default/home.html.twig',[
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,'title'=> 'home',
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
         return $this->render('default/about.html.twig',array('title'=>'about'));
       
    }

     /**
     * @Route("/where", name="where")
     */
    public function whereAction(Request $request)
    {
        // replace this example code with whatever you need
         return $this->render('default/where.html.twig',array('title'=>'where'));
    }

     /**
     * @Route("/menu", name="menu")
     */
    public function menuAction(Request $request)
    {
        try
            {
                $logger = $this->get('logger');
                $dbh = new \PDO("mysql:host=localhost;dbname=".$this->container->getParameter('database_name'),$this->container->getParameter('database_user'),$this->container->getParameter('database_password'),array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
                $num_dia = date('w');
                $logger->info($num_dia);
                $sql = "SELECT * FROM  menu WHERE DIASET= :num_dia";
                $query = $dbh -> prepare($sql);
                $query -> bindParam(':num_dia', $num_dia, \PDO::PARAM_INT);
                $query -> execute();
                $resultat = $query -> fetchAll(\PDO::FETCH_OBJ);    
            }
        catch (PDOException $e)
            {
                exit("Error: " . $e->getMessage());
            }
        return $this->render('default/menu.html.twig',array('menu'=>$resultat)); 
    }

    /**
     * @Route("/menu/{id}", name="producte", requirements={"id": "\d+"})
     */

    public function showMenu(Request $Request)
    {
        $id = $Request->get('id');
        $dbh = new \PDO("mysql:host=localhost;dbname=".$this->container->getParameter('database_name'),$this->container->getParameter('database_user'),$this->container->getParameter('database_password'),array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $sql = "SELECT * FROM  menu WHERE ID= :id";
            $query = $dbh -> prepare($sql);
            $query -> bindParam(':id', $id, \PDO::PARAM_INT);
            $query -> execute();
            $resultat = $query -> fetchAll(\PDO::FETCH_OBJ);  

        return $this->render('default/producte.html.twig',array('resultat'=>$resultat));
    }

}
