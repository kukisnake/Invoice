<?php

namespace Invoice\InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Invoice\InvoiceBundle\Entity\ProductsServices;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductsServicesController extends Controller {

    /**
     * @Route("/showPS/{id}", defaults={"id" = false})
     */
    public function showPSIDAction($id) {
        $product = $this->getDoctrine()
                ->getRepository('InvoiceBundle:ProductsServices')
                ->findOneById($id);

        if (!$product) {
            throw $this->createNotFoundException(
                    'No product found for id ' . $id
            );
        }
        return $this->render('InvoiceBundle:ProductsServices:show_ps.html.twig', array('product' => $product
        ));
    }

    /**
     * @Route("/listPS", name="listPS")
     */
    public function listPSAction() {
        $products = $this->getDoctrine()->getRepository('InvoiceBundle:ProductsServices')->findAll();
        return $this->render('InvoiceBundle:ProductsServices:list_ps.html.twig', array('products' => $products
        ));
    }

    /**
     * @Route("/formPS/{id}", name="addPS", defaults={"id" = false})
     */
    public function formPSAction(Request $req, $id) {
        if ($id) {
            $ps = $this->getDoctrine()->getRepository('InvoiceBundle:ProductsServices')->findOneById($id);
            if (!$ps) {
                throw $this->createNotFoundException(
                        'No product found for id ' . $id
                );
            }
        } else {
            $ps = new ProductsServices();
        }


        $form = $this->createFormBuilder($ps)
//                ->setAction($this->generateUrl('/listPS'))
                ->add('name', 'text')
                ->add('price', 'number')
                ->add('vatRate', 'text')
                ->add('unit', 'text')
                ->add('save', 'submit', array('label' => 'Create Product/Service'))
                ->getForm();
        $form->handleRequest($req);

        if ($form->isSubmitted()) {
            $ps = $form->getData();
//            $user = $ps->setSeller($this->getUser());
//            $seller = $user->getSeller();
//            $ps->setSeller($seller);
            $em = $this->getDoctrine()->getManager();
            $em->persist($ps);
            $em->flush();
            return $this->redirectToRoute('listPS');
        }
        return $this->render('InvoiceBundle:ProductsServices:add_ps.html.twig', array('form' => $form->createView())
        );
    }

    /**
     * @Route("/deletePS/{id}")
     */
    public function deletePSAction($id) {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('InvoiceBundle:ProductsServices')->find($id);
        if (!$product) {
            throw $this->createNotFoundException(
                    'No product found for id ' . $id
            );
        } else {
            $em->remove($product);
            $em->flush();
        }

        return $this->render('InvoiceBundle:ProductsServices:delete_ps.html.twig', array('product' => $product
        ));
    }

}
