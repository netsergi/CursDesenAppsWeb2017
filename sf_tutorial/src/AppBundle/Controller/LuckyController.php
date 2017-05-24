<?php
    // src/AppBundle/Controller/LuckyController.php
    namespace AppBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class LuckyController extends Controller
    {
        /**
         * @Route("/lucky/number")
         */
        public function numberAction()
        {
            $number = mt_rand(0, 100);

            return $this->render('lucky/number.html.twig', array(
                'number' => $number,
            ));
        }
         /**
         * @Route("/lucky/date")
         */

          public function DateAction()
        {
            $date =  date('l d/m/Y');
            $number = mt_rand(0, 100);

            return $this->render('lucky/date.html.twig', array(
                'date' => $date,'number' => $number
            ));
        }
    }