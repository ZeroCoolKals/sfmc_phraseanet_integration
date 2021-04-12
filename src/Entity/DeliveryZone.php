<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * DeliveryZone
 *
 * @ORM\Table(name="delivery_zone", indexes={@ORM\Index(name="fk_zoneLivraison_service1", columns={"service_id"})})
 * @ORM\Entity
 */
class DeliveryZone
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
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price", type="string", length=45, nullable=true)
     */
    private $price;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service_id", referencedColumnName="id")
     * })
     */
    private $service;
}
