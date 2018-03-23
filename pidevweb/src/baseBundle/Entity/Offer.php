<?php

namespace baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 *
 * @ORM\Table(name="offer")
 * @ORM\Entity
 */
class Offer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="offerid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $offerid;

    /**
     * @var string
     *
     * @ORM\Column(name="offername", type="string", length=255, nullable=true)
     */
    private $offername;

    /**
     * @var integer
     *
     * @ORM\Column(name="offerprice", type="integer", nullable=true)
     */
    private $offerprice;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="productname", type="string", length=255, nullable=true)
     */
    private $productname;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var integer
     *
     * @ORM\Column(name="productprice", type="integer", nullable=true)
     */
    private $productprice;


}

