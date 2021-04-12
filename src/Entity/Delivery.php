<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Delivery
 *
 * @ORM\Table(name="delivery", indexes={@ORM\Index(name="fk_Livraison_livreur1", columns={"delivery_man_id"}), @ORM\Index(name="fk_Livraison_Commande1", columns={"order_id"})})
 * @ORM\Entity
 */
class Delivery
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="etat", type="boolean", nullable=true)
     */
    private $etat;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var \Order
     *
     * @ORM\ManyToOne(targetEntity="Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;

    /**
     * @var \DeliveryMan
     *
     * @ORM\ManyToOne(targetEntity="DeliveryMan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_man_id", referencedColumnName="id")
     * })
     */
    private $deliveryMan;
}
