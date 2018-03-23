<?php

namespace baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="prodidFk", columns={"productId"}), @ORM\Index(name="useridFk", columns={"userNameClient"})})
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var integer
     *
     * @ORM\Column(name="orderId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="orderDate", type="date", nullable=false)
     */
    private $orderdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="orderForDate", type="date", nullable=false)
     */
    private $orderfordate;

    /**
     * @var integer
     *
     * @ORM\Column(name="desiredQuantity", type="integer", nullable=false)
     */
    private $desiredquantity;

    /**
     * @var string
     *
     * @ORM\Column(name="productName", type="string", length=255, nullable=false)
     */
    private $productname;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="stat", type="integer", nullable=false)
     */
    private $stat;

    /**
     * @var integer
     *
     * @ORM\Column(name="seen", type="integer", nullable=false)
     */
    private $seen;

    /**
     * @var string
     *
     * @ORM\Column(name="userNameClient", type="string", length=255, nullable=false)
     */
    private $usernameclient;

    /**
     * @var string
     *
     * @ORM\Column(name="userNamePatissier", type="string", length=255, nullable=false)
     */
    private $usernamepatissier;

    /**
     * @var integer
     *
     * @ORM\Column(name="productId", type="integer", nullable=false)
     */
    private $productid;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=true)
     */
    private $description;


}

