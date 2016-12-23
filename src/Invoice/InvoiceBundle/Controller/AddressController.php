<?php

namespace Invoice\InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Invoice\InvoiceBundle\Entity\Address;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddressController extends Controller {

    /**
     * @Route("/addressList", name="addressList")
     */
    public function addressListAction() {

        $addresses = $this->getDoctrine()->getRepository('InvoiceBundle:Address')->findAll();
        return $this->render('InvoiceBundle:Address:address_list.html.twig', array('addresses' => $addresses
        ));
    }

    /**
     * @Route("/addressShow/{id}", defaults={"id" = false})
     */
    public function addressShowAction($id) {
        $address = $this->getDoctrine()
                ->getRepository('InvoiceBundle:Address')
                ->findOneById($id);

        if (!$address) {
            throw $this->createNotFoundException(
                    'No address found for id ' . $id
            );
        }
        return $this->render('InvoiceBundle:Address:address_show.html.twig', array('address' => $address, 'id' => $id
        ));
    }

    /**
     * @Route("/addressForm/{id}/{type}/{sourceId}", name="addAddress", defaults={"id" = false, "type"=false, "sourceId"=false})
     */
    public function addressFormAction(Request $req, $id, $type, $sourceId) {
        if ($id) {
            $address = $this->getDoctrine()->getRepository('InvoiceBundle:Address')->findOneById($id);
        } else {
            $address = new Address();
        }

        $redirectRoute = 'addressList';
        $redirectSlugs = array();
        
        $form = $this->createFormBuilder($address)
                ->add('street', 'text')
                ->add('city', 'text')
                ->add('zipCode', 'text')
                ->add('streetNumber', 'text')
                ->add('flatNumber', 'text')
                ->add('country', 'text')
                ->add('save', 'submit', array('label' => 'Update Address'))
                ->getForm();
        $form->handleRequest($req);

        if ($type == 'seller' && $sourceId) {
            $backUrl='/sellerShow/'.$sourceId;
        } elseif ($type == 'contractor' && $sourceId) {
            $backUrl='/contractorShow/'.$sourceId;
        }
        
        if ($form->isSubmitted()) {
            $address = $form->getData();

            //spięcie adresu
            if ($type == 'seller' && $sourceId) {
                $sellerRepo = $this->getDoctrine()->getRepository('InvoiceBundle:Seller');
                $seller = $sellerRepo->findOneById($sourceId);
                $address->setSeller($seller);
                $redirectRoute = 'sellerShow';
                $redirectSlugs = array('id' => $sourceId);
            } elseif ($type == 'contractor' && $sourceId) {
                $contractorRepo = $this->getDoctrine()->getRepository('InvoiceBundle:Contractor');
                $contractor = $contractorRepo->findOneById($sourceId);
                $address->setContractor($contractor);
                $redirectRoute = 'contractorShow';
                $redirectSlugs = array('id' => $sourceId);
            }


            $em = $this->getDoctrine()->getManager();
            $em->persist($address);
            $em->flush();


            echo $backUrl;
            return $this->redirectToRoute($redirectRoute, $redirectSlugs);
        }
        return $this->render('InvoiceBundle:Address:address_form.html.twig', 
                array('form' => $form->createView(),
                       'backUrl'=>$backUrl
                      )
        );
    }

}
