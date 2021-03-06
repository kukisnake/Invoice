<?php

namespace Invoice\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="Invoice\InvoiceBundle\Repository\DocumentRepository")
 */
class Document {

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
     * @ORM\ManyToOne(targetEntity="Contractor", inversedBy="document")
     * @ORM\JoinColumn(name="contractor_id", referencedColumnName="id")
     */
    private $contractor;

    /**
     * @var type
     * @ORM\OneToMany(targetEntity="Listing", mappedBy="document")
     */
    private $listing;

    /**
     * @var type
     * @ORM\ManyToOne(targetEntity="Seller", inversedBy="document")
     * @ORM\JoinColumn(name="seller_id", referencedColumnName="id")
     */
    private $seller;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=20, unique=true)
     */
    private $number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_issue", type="datetime")
     */
    private $dateOfIssue;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=50)
     */
    private $place;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sale", type="datetime")
     */
    private $dateSale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_payment", type="datetime")
     */
    private $datePayment;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="string", length=20)
     */
    private $paymentType;

    /**
     * @var float
     *
     * @ORM\Column(name="net_document_value", type="float")
     */
    private $netDocumentValue;

    /**
     * @var float
     *
     * @ORM\Column(name="gross_document_value", type="float")
     */
    private $grossDocumentValue;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Document
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Document
     */
    public function setNumber($number) {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * Set dateOfIssue
     *
     * @param \DateTime $dateOfIssue
     * @return Document
     */
    public function setDateOfIssue($dateOfIssue) {
        $this->dateOfIssue = $dateOfIssue;

        return $this;
    }

    /**
     * Get dateOfIssue
     *
     * @return \DateTime
     */
    public function getDateOfIssue() {
        return $this->dateOfIssue;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Document
     */
    public function setPlace($place) {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace() {
        return $this->place;
    }

    /**
     * Set dateSale
     *
     * @param \DateTime $dateSale
     * @return Document
     */
    public function setDateSale($dateSale) {
        $this->dateSale = $dateSale;

        return $this;
    }

    /**
     * Get dateSale
     *
     * @return \DateTime
     */
    public function getDateSale() {
        return $this->dateSale;
    }

    /**
     * Set datePayment
     *
     * @param \DateTime $datePayment
     * @return Document
     */
    public function setDatePayment($datePayment) {
        $this->datePayment = $datePayment;

        return $this;
    }

    /**
     * Get datePayment
     *
     * @return \DateTime
     */
    public function getDatePayment() {
        return $this->datePayment;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     * @return Document
     */
    public function setPaymentType($paymentType) {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType() {
        return $this->paymentType;
    }

    /**
     * Set netDocumentValue
     *
     * @param float $netDocumentValue
     * @return Document
     */
    public function setNetDocumentValue($netDocumentValue) {
        $this->netDocumentValue = $netDocumentValue;

        return $this;
    }

    /**
     * Get netDocumentValue
     *
     * @return float
     */
    public function getNetDocumentValue() {
        return $this->netDocumentValue;
    }

    /**
     * Set grossDocumentValue
     *
     * @param float $grossDocumentValue
     * @return Document
     */
    public function setGrossDocumentValue($grossDocumentValue) {
        $this->grossDocumentValue = $grossDocumentValue;

        return $this;
    }

    /**
     * Get grossDocumentValue
     *
     * @return float
     */
    public function getGrossDocumentValue() {
        return $this->grossDocumentValue;
    }

    /**
     * Set seller
     *
     * @param \Invoice\InvoiceBundle\Entity\Seller $seller
     * @return Document
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
    public function __construct() {
        $this->listing = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listing
     *
     * @param \Invoice\InvoiceBundle\Entity\Listing $listing
     * @return Document
     */
    public function addListing(\Invoice\InvoiceBundle\Entity\Listing $listing) {
        $this->listing[] = $listing;

        return $this;
    }

    /**
     * Remove listing
     *
     * @param \Invoice\InvoiceBundle\Entity\Listing $listing
     */
    public function removeListing(\Invoice\InvoiceBundle\Entity\Listing $listing) {
        $this->listing->removeElement($listing);
    }

    /**
     * Get listing
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListing() {
        return $this->listing;
    }


    /**
     * Set contractor
     *
     * @param \Invoice\InvoiceBundle\Entity\Contractor $contractor
     * @return Document
     */
    public function setContractor(\Invoice\InvoiceBundle\Entity\Contractor $contractor = null)
    {
        $this->contractor = $contractor;

        return $this;
    }

    /**
     * Get contractor
     *
     * @return \Invoice\InvoiceBundle\Entity\Contractor 
     */
    public function getContractor()
    {
        return $this->contractor;
    }
}
