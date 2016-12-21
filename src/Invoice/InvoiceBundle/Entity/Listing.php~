<?php

namespace Invoice\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listing
 *
 * @ORM\Table(name="listing")
 * @ORM\Entity(repositoryClass="Invoice\InvoiceBundle\Repository\ListingRepository")
 */
class Listing {

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
     * @ORM\ManyToOne(targetEntity="ProductsServices", inversedBy="listing")
     * @ORM\JoinColumn(name="productsservices_id", referencedColumnName="id")
     */
    private $productsservices;

    /**
     * @var type 
     * @ORM\ManyToOne(targetEntity="Document", inversedBy="listing")
     * @ORM\JoinColumn(name="document_id", referencedColumnName="id")
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="product_service", type="string", length=50)
     */
    private $productService;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=20)
     */
    private $unit;

    /**
     * @var string
     *
     * @ORM\Column(name="net_price", type="string", length=255)
     */
    private $netPrice;

    /**
     * @var float
     *
     * @ORM\Column(name="gross_price", type="float")
     */
    private $grossPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="vat_rate", type="string", length=20)
     */
    private $vatRate;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set productService
     *
     * @param string $productService
     * @return Listing
     */
    public function setProductService($productService) {
        $this->productService = $productService;

        return $this;
    }

    /**
     * Get productService
     *
     * @return string 
     */
    public function getProductService() {
        return $this->productService;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Listing
     */
    public function setAmount($amount) {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Set unit
     *
     * @param string $unit
     * @return Listing
     */
    public function setUnit($unit) {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string 
     */
    public function getUnit() {
        return $this->unit;
    }

    /**
     * Set netPrice
     *
     * @param string $netPrice
     * @return Listing
     */
    public function setNetPrice($netPrice) {
        $this->netPrice = $netPrice;

        return $this;
    }

    /**
     * Get netPrice
     *
     * @return string 
     */
    public function getNetPrice() {
        return $this->netPrice;
    }

    /**
     * Set grossPrice
     *
     * @param float $grossPrice
     * @return Listing
     */
    public function setGrossPrice($grossPrice) {
        $this->grossPrice = $grossPrice;

        return $this;
    }

    /**
     * Get grossPrice
     *
     * @return float 
     */
    public function getGrossPrice() {
        return $this->grossPrice;
    }

    /**
     * Set vatRate
     *
     * @param string $vatRate
     * @return Listing
     */
    public function setVatRate($vatRate) {
        $this->vatRate = $vatRate;

        return $this;
    }

    /**
     * Get vatRate
     *
     * @return string 
     */
    public function getVatRate() {
        return $this->vatRate;
    }

    /**
     * Set document
     *
     * @param \Invoice\InvoiceBundle\Entity\Document $document
     * @return Listing
     */
    public function setDocument(\Invoice\InvoiceBundle\Entity\Document $document = null) {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return \Invoice\InvoiceBundle\Entity\Document 
     */
    public function getDocument() {
        return $this->document;
    }


    /**
     * Set productsservices
     *
     * @param \Invoice\InvoiceBundle\Entity\ProductsServices $productsservices
     * @return Listing
     */
    public function setProductsservices(\Invoice\InvoiceBundle\Entity\ProductsServices $productsservices = null)
    {
        $this->productsservices = $productsservices;

        return $this;
    }

    /**
     * Get productsservices
     *
     * @return \Invoice\InvoiceBundle\Entity\ProductsServices 
     */
    public function getProductsservices()
    {
        return $this->productsservices;
    }
}
