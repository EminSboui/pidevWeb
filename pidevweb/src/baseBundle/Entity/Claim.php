<?php

namespace baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Claim
 *
 * @ORM\Table(name="claim", indexes={@ORM\Index(name="user1fk", columns={"userclaimed"}), @ORM\Index(name="user2fk", columns={"userclaimer"})})
 * @ORM\Entity
 */
class Claim
{
    /**
     * @var integer
     *
     * @ORM\Column(name="claim_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $claimId;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="claimdate", type="date", nullable=false)
     */
    private $claimdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="userclaimed", type="integer", nullable=false)
     */
    private $userclaimed;

    /**
     * @var integer
     *
     * @ORM\Column(name="userclaimer", type="integer", nullable=false)
     */
    private $userclaimer;


}

