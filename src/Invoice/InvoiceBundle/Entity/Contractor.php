<?php

namespace Invoice\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Contractor
 *
 * @ORM\Table(name="contractor")
 * @ORM\Entity(repositoryClass="Invoice\InvoiceBundle\Repository\ContractorRepository")
 */
class Contractor {

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
     * @ORM\OneToMany(targetEntity="Address", mappedBy="contractor")
     */
    private $address;

    /**
     * @var type 
     * @ORM\OneToMany(targetEntity="Document", mappedBy="contractor")
     */
    private $document;

    /**
     * @var type 
     * @ORM\ManyToOne(targetEntity="Seller", inversedBy="contractor")
     * @ORM\JoinColumn(name="seller_id", referencedColumnName="id")
     */
    private $seller;

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
     * @return Contractor
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
     * @return Contractor
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
     * @return Contractor
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
     * @return Contractor
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
     * Set seller
     *
     * @param \Invoice\InvoiceBundle\Entity\Seller $seller
     * @return Contractor
     */
    public function setSeller(\Invoice\InvoiceBundle\Entity\Seller $seller = null) {
        $this->seller = $seller;

        return $this;
    }

    /**
     * Get seller
     *
     * @return \Invoice\InvoiceBundle\Entity\Seller 
     */
    public function getSeller() {
        return $this->seller;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
        $this->document = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add address
     *
     * @param \Invoice\InvoiceBundle\Entity\Address $address
     * @return Contractor
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

    /**
     * Add document
     *
     * @param \Invoice\InvoiceBundle\Entity\Document $document
     * @return Contractor
     */
    public function addDocument(\Invoice\InvoiceBundle\Entity\Document $document)
    {
        $this->document[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \Invoice\InvoiceBundle\Entity\Document $document
     */
    public function removeDocument(\Invoice\InvoiceBundle\Entity\Document $document)
    {
        $this->document->removeElement($document);
    }

    /**
     * Get document
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocument()
    {
        return $this->document;
    }
}
