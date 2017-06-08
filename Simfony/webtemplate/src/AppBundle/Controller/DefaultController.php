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

        try
            {
                $dbh = $this->db_connect();
                $sql = "SELECT * FROM  T_EMPLOYEES T
                        INNER JOIN T_KNOWLEDGE_LINES K
                        ON T.KNLN_ID=K.KNLN_ID
                        INNER JOIN t_offices O
                        ON O.OFFC_ID=T.OFFC_ID;";
                $query = $dbh -> prepare($sql);
                $query -> execute();
                $resultat = $query -> fetchAll(\PDO::FETCH_OBJ);                 
            }
             catch (PDOException $e)
            {
                exit("Error: " . $e->getMessage());
            }
            return $this->render('default/empleats.html.twig',array('resultat'=>$resultat));
    }

        /**
     * @Route("/empleats/{id}", name="empleat", requirements={"id": "\d+"}))

     */
    public function showempleatAction(Request $Request)
    {
        // replace this example code with whatever you need
        $id = $Request->get('id');
        $dbh = $this->db_connect();
        $sql = "SELECT * FROM T_EMPLOYEES E
                INNER JOIN t_offices O
                ON O.OFFC_ID=E.OFFC_ID
                INNER JOIN t_knowledge_lines K
                ON K.KNLN_ID = E.KNLN_ID
                WHERE EMPL_ID= :id";
        $query = $dbh -> prepare($sql);
        $query -> bindParam(':id', $id, \PDO::PARAM_INT);
        $query -> execute();
        $resultat = $query -> fetch(\PDO::FETCH_OBJ);  
        return $this->render('default/empleat.html.twig',array('resultat'=>$resultat));
    }

       public function sidebarAction(Request $Request)
    { 
        $id = $Request->get('id');
        $dbh = $this->db_connect();
        $sql = "SELECT * FROM T_PROJECTS P
                INNER JOIN T_PROJECTS_EMPLOYEES PE
                ON P.PRJT_ID = PE.PRJT_ID
                WHERE PE.EMPL_ID= :id";
        $query = $dbh -> prepare($sql);
        $query -> bindParam(':id', $id, \PDO::PARAM_INT);
        $query -> execute();
        $resultat = $query -> fetchAll(\PDO::FETCH_OBJ);
        return $this->render('default/sidebar.html.twig',array('projectes'=>$resultat));
    }


    private function db_connect() {

        $dbh = new \PDO("mysql:host=".$this->container->getParameter('database_host').";dbname=".$this->container->getParameter('database_name'),$this->container->getParameter('database_user'),$this->container->getParameter('database_password'),array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        return $dbh;
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

