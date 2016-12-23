<?php

namespace Invoice\InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {

    /**
     * @Route("/")
     */
    public function indexAction() {
        $user = $this->getUser();
        
        if (!$user) {
            $username = false;
            $user = false;
        }else{
            $username=$user->getUsername();
        }
        return $this->render('InvoiceBundle:Default:index.html.twig', array(
                    'username' => $username,
                    'user' => $user
        ));
    }

}
