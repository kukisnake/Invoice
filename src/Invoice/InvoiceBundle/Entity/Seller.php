<?php

namespace Invoice\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Seller
 *
 * @ORM\Table(name="seller")
 * @ORM\Entity(repositoryClass="Invoice\InvoiceBundle\Repository\SellerRepository")
 */
class Seller {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var type
     * @ORM\OneToMany(targetEntity="Address", mappedBy="seller") 
     */
    private $address;

    /**
     * @var type 
     * @ORM\OneToMany(targetEntity="Contractor", mappedBy="seller")
     */
    private $contractor;

    /**
     * @var type 
     * @ORM\OneToMany(targetEntity="ProductsServices", mappedBy="seller")
     */
    private $productsservices;

    /**
     * @var type 
     * @ORM\OneToMany(targetEntity="User", mappedBy="seller")
     */
    private $user;

    /**
     * @var type 
     * @ORM\OneToMany(targetEntity="Document", mappedBy="seller")
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nip", type="string", length=50, unique=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="bank", type="string", length=50)
     */
    private $bank;

    /**
     * @var string
     *
     * @ORM\Column(name="account_number", type="string", length=50, unique=true)
     */
    private $accountNumber;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Seller
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set nip
     *
     * @param string $nip
     * @return Seller
     */
    public function setNip($nip) {
        $this->nip = $nip;

        return $this;
    }

    /**
     * Get nip
     *
     * @return string
     */
    public function getNip() {
        return $this->nip;
    }

    /**
     * Set bank
     *
     * @param string $bank
     * @return Seller
     */
    public function setBank($bank) {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return string
     */
    public function getBank() {
        return $this->bank;
    }

    /**
     * Set accountNumber
     *
     * @param string $accountNumber
     * @return Seller
     */
    public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string
     */
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \Invoice\InvoiceBundle\Entity\User $user
     * @return Seller
     */
    public function addUser(\Invoice\InvoiceBundle\Entity\User $user) {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Invoice\InvoiceBundle\Entity\User $user
     */
    public function removeUser(\Invoice\InvoiceBundle\Entity\User $user) {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Add document
     *
     * @param \Invoice\InvoiceBundle\Entity\Document $document
     * @return Seller
     */
    public function addDocument(\Invoice\InvoiceBundle\Entity\Document $document) {
        $this->document[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \Invoice\InvoiceBundle\Entity\Document $document
     */
    public function removeDocument(\Invoice\InvoiceBundle\Entity\Document $document) {
        $this->document->removeElement($document);
    }

    /**
     * Get document
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocument() {
        return $this->document;
    }

    /**
     * Add productsservices
     *
     * @param \Invoice\InvoiceBundle\Entity\productsservices $productsservices
     * @return Seller
     */
    public function addProductsservice(\Invoice\InvoiceBundle\Entity\productsservices $productsservices) {
        $this->productsservices[] = $productsservices;

        return $this;
    }

    /**
     * Remove productsservices
     *
     * @param \Invoice\InvoiceBundle\Entity\productsservices $productsservices
     */
    public function removeProductsservice(\Invoice\InvoiceBundle\Entity\productsservices $productsservices) {
        $this->productsservices->removeElement($productsservices);
    }

    /**
     * Get productsservices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductsservices() {
        return $this->productsservices;
    }

    /**
     * Add contractor
     *
     * @param \Invoice\InvoiceBundle\Entity\Contractor $contractor
     * @return Seller
     */
    public function addContractor(\Invoice\InvoiceBundle\Entity\Contractor $contractor) {
        $this->contractor[] = $contractor;

        return $this;
    }

    /**
     * Remove contractor
     *
     * @param \Invoice\InvoiceBundle\Entity\Contractor $contractor
     */
    public function removeContractor(\Invoice\InvoiceBundle\Entity\Contractor $contractor) {
        $this->contractor->removeElement($contractor);
    }

    /**
     * Get contractor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContractor() {
        return $this->contractor;
    }


    /**
     * Add address
     *
     * @param \Invoice\InvoiceBundle\Entity\Address $address
     * @return Seller
     */
    public function addAddress(\Invoice\InvoiceBundle\Entity\Address $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \Invoice\InvoiceBundle\Entity\Address $address
     */
    public function removeAddress(\Invoice\InvoiceBundle\Entity\Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddress()
    {
        return $this->address;
    }
}
