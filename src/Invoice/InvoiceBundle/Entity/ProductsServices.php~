<?php

namespace Invoice\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsServices
 *
 * @ORM\Table(name="products_services")
 * @ORM\Entity(repositoryClass="Invoice\InvoiceBundle\Repository\ProductsServicesRepository")
 */
class ProductsServices {

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
     * @ORM\ManyToOne(targetEntity="Seller", inversedBy="productsservices")
     * @ORM\JoinColumn(name="seller_id", referencedColumnName="id")
     */
    private $seller;

    /**
     * @var type 
     * @ORM\OneToMany(targetEntity="Listing", mappedBy="productsservices")
     */
    private $listing;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="vat_rate", type="string", length=10)
     */
    private $vatRate;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=20)
     */
    private $unit;

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
     * @return ProductsServices
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
     * Set price
     *
     * @param float $price
     * @return ProductsServices
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set vatRate
     *
     * @param string $vatRate
     * @return ProductsServices
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
     * Set unit
     *
     * @param string $unit
     * @return ProductsServices
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
     * Constructor
     */
    public function __construct() {
        $this->listing = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listing
     *
     * @param \Invoice\InvoiceBundle\Entity\Listing $listing
     * @return ProductsServices
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
     * Set seller
     *
     * @param \Invoice\InvoiceBundle\Entity\Seller $seller
     * @return ProductsServices
     */
    public function setSeller(\Invoice\InvoiceBundle\Entity\Seller $seller = null)
    {
        $this->seller = $seller;

        return $this;
    }

    /**
     * Get seller
     *
     * @return \Invoice\InvoiceBundle\Entity\Seller 
     */
    public function getSeller()
    {
        return $this->seller;
    }
}
