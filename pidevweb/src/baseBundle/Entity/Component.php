<?php

namespace baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Component
 *
 * @ORM\Table(name="component", indexes={@ORM\Index(name="recipefk", columns={"recipeid"})})
 * @ORM\Entity
 */
class Component
{
    /**
     * @var integer
     *
     * @ORM\Column(name="componentid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $componentid;

    /**
     * @var string
     *
     * @ORM\Column(name="componentname", type="string", length=255, nullable=false)
     */
    private $componentname;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="recipeid", type="integer", nullable=false)
     */
    private $recipeid;

    /**
     * @var string
     *
     * @ORM\Column(name="unity", type="string", length=255, nullable=true)
     */
    private $unity;


}

