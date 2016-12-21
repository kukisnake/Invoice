<?php

namespace Invoice\InvoiceBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="Invoice\InvoiceBundle\Repository\UserRepository")
 */
class User extends BaseUser {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var type 
     * @ORM\ManyToOne(targetEntity="Seller", inversedBy="user")
     * @ORM\JoinColumn(name="seller_id", referencedColumnName="id")
     */
    private $seller;

    public function __construct() {

        parent::__construct();
    }


    /**
     * Set seller
     *
     * @param \Invoice\InvoiceBundle\Entity\Seller $seller
     * @return User
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
