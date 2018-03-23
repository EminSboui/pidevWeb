<?php

namespace baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productevaluation
 *
 * @ORM\Table(name="productevaluation", indexes={@ORM\Index(name="userevalid", columns={"userId"}), @ORM\Index(name="prodevalid", columns={"productId"})})
 * @ORM\Entity
 */
class Productevaluation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="EvaluationId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $evaluationid;

    /**
     * @var string
     *
     * @ORM\Column(name="EvaluationNote", type="string", length=255, nullable=false)
     */
    private $evaluationnote;

    /**
     * @var string
     *
     * @ORM\Column(name="EvaluationCommentaire", type="string", length=255, nullable=true)
     */
    private $evaluationcommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="EvaluationDate", type="string", length=255, nullable=false)
     */
    private $evaluationdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="productId", type="integer", nullable=false)
     */
    private $productid;


}

