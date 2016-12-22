<?php

namespace Invoice\InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {

    /**
     * @Route("/")
     */
    public function indexAction() {
        $username = $this->getUser()->getUsername();
        return $this->render('InvoiceBundle:Default:index.html.twig', array('username' => $username));
    }

}
