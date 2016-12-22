<?php

namespace Invoice\InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Invoice\InvoiceBundle\Entity\Seller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SellerController extends Controller {

    /**
     * @Route("/sellerList", name="sellerList")
     */
    public function sellerListAction() {

        $sellers = $this->getDoctrine()->getRepository('InvoiceBundle:Seller')->findAll();
        return $this->render('InvoiceBundle:Seller:seller_list.html.twig', array('sellers' => $sellers
        ));
    }

    /**
     * @Route("/sellerShow/{id}", defaults={"id" = false})
     */
    public function sellerShowAction($id) {
        $seller = $this->getDoctrine()
                ->getRepository('InvoiceBundle:Seller')
                ->findOneById($id);

    if (!$seller) {
            throw $this->createNotFoundException(
                    'No seller found for id ' . $id
            );
        }
        return $this->render('InvoiceBundle:Seller:seller_show.html.twig', array('seller' => $seller, 'id' => $id
        ));
    }

    /**
     * @Route("/sellerForm/{id}", name="addSeller", defaults={"id" = false})
     */
    public function sellerFormAction(Request $req, $id) {
        if ($id) {
            $seller = $this->getDoctrine()->getRepository('InvoiceBundle:Seller')->findOneById($id);
        } else {
            $seller = new Seller();
        }


        $form = $this->createFormBuilder($seller)
                ->add('name', 'text')
                ->add('nip', 'number')
                ->add('bank', 'text')
                ->add('accountNumber', 'text')
                ->add('save', 'submit', array('label' => 'Update Seller'))
                ->getForm();
        $form->handleRequest($req);

        if ($form->isSubmitted()) {
            $seller = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($seller);
            $em->flush();
            return $this->redirectToRoute('sellerList');
        }
        return $this->render('InvoiceBundle:Seller:seller_form.html.twig', array('form' => $form->createView())
        );
    }

}
