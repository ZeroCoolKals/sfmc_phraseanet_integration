<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule", indexes={@ORM\Index(name="fk_vehicule_vehicule_type1", columns={"vehicule_type_id"}), @ORM\Index(name="fk_vehicule_livreur1", columns={"delivery_man_id"})})
 * @ORM\Entity
 */
class Vehicule
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
     * @ORM\Column(name="registration", type="string", length=45, nullable=true)
     */
    private $registration;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="acquisition_date", type="date", nullable=true)
     */
    private $acquisitionDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var \DeliveryMan
     *
     * @ORM\ManyToOne(targetEntity="DeliveryMan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_man_id", referencedColumnName="id")
     * })
     */
    private $deliveryMan;

    /**
     * @var \VehiculeType
     *
     * @ORM\ManyToOne(targetEntity="VehiculeType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vehicule_type_id", referencedColumnName="id")
     * })
     */
    private $vehiculeType;
}
