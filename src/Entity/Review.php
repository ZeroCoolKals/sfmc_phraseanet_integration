<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review", indexes={@ORM\Index(name="fk_review_Livraison1", columns={"delivery_id"}), @ORM\Index(name="fk_review_Client1", columns={"client_id"})})
 * @ORM\Entity
 */
class Review
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="string", length=254, nullable=true)
     */
    private $comments;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    /**
     * @var \Delivery
     *
     * @ORM\ManyToOne(targetEntity="Delivery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_id", referencedColumnName="id")
     * })
     */
    private $delivery;
}
