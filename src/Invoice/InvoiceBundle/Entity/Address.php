<?php

namespace Invoice\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="Invoice\InvoiceBundle\Repository\AddressRepository")
 */
class Address {

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
     * @ORM\ManyToOne(targetEntity="Seller", inversedBy="address")
     * @ORM\JoinColumn(name="seller_id", referencedColumnName="id")
     */
    private $seller;
    
    /**
     * @var type 
     * @ORM\ManyToOne(targetEntity="Contractor", inversedBy="address")
     * @ORM\JoinColumn(name="contractor_id", referencedColumnName="id")
     */
    private $contractor;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=100)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=20)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="street_number", type="string", length=10)
     */
    private $streetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="flat_number", type="string", length=10)
     */
    private $flatNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=20)
     */
    private $country;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Address
     */
    public function setStreet($street) {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet() {
        return $this->street;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city) {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Address
     */
    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode() {
        return $this->zipCode;
    }

    /**
     * Set streetNumber
     *
     * @param string $streetNumber
     * @return Address
     */
    public function setStreetNumber($streetNumber) {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * Get streetNumber
     *
     * @return string 
     */
    public function getStreetNumber() {
        return $this->streetNumber;
    }

    /**
     * Set flatNumber
     *
     * @param string $flatNumber
     * @return Address
     */
    public function setFlatNumber($flatNumber) {
        $this->flatNumber = $flatNumber;

        return $this;
    }

    /**
     * Get flatNumber
     *
     * @return string 
     */
    public function getFlatNumber() {
        return $this->flatNumber;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Address
     */
    public function setCountry($country) {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry() {
        return $this->country;
    }


    /**
     * Set seller
     *
     * @param \Invoice\InvoiceBundle\Entity\Seller $seller
     * @return Address
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

    /**
     * Set contractor
     *
     * @param \Invoice\InvoiceBundle\Entity\Contractor $contractor
     * @return Address
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
