<?php

namespace Invoice\InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Invoice\InvoiceBundle\Entity\Contractor;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContractorController extends Controller {

    /**
     * @Route("/contractorList", name="contractorList")
     */
    public function contractorListAction() {

        $contractors = $this->getDoctrine()->getRepository('InvoiceBundle:Contractor')->findAll();
        return $this->render('InvoiceBundle:Contractor:contractor_list.html.twig', array('contractors' => $contractors
        ));
    }

    /**
     * @Route("/contractorShow/{id}", name="contractorShow", defaults={"id" = false})
     */
    public function contractorShowAction($id) {
        $contractor = $this->getDoctrine()
                ->getRepository('InvoiceBundle:Contractor')
                ->findOneById($id);
        $address = $contractor->getAddress();

        if (!$contractor) {
            throw $this->createNotFoundException(
                    'No contractor found for id ' . $id
            );
        }
        return $this->render('InvoiceBundle:Contractor:contractor_show.html.twig', array(
                    'contractor' => $contractor,
                    'id' => $id,
                    'addresses' => $address
        ));
    }

    /**
     * @Route("/contractorForm/{id}", name="addContractor", defaults={"id" = false})
     */
    public function contractorFormAction(Request $req, $id) {
        if ($id) {
            $contractor = $this->getDoctrine()->getRepository('InvoiceBundle:Contractor')->findOneById($id);
        } else {
            $contractor = new Contractor();
        }


        $form = $this->createFormBuilder($contractor)
                ->add('name', 'text')
                ->add('nip', 'number')
                ->add('bank', 'text')
                ->add('accountNumber', 'text')
                ->add('save', 'submit', array('label' => 'Update Contractor'))
                ->getForm();
        $form->handleRequest($req);

        if ($form->isSubmitted()) {
            $contractor = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($contractor);
            $em->flush();
            return $this->redirectToRoute('contractorShow', array('id' => $id));
        }
        $backUrl = '/contractorShow/' . $contractor->getId();
        return $this->render('InvoiceBundle:Contractor:contractor_form.html.twig', array(
                    'form' => $form->createView(),
                    'backUrl' => $backUrl
                        )
        );
    }

}
