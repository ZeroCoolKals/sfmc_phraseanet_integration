<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * DeliveryMan
 *
 * @ORM\Table(name="delivery_man", indexes={@ORM\Index(name="fk_livreur_service", columns={"service_id"})})
 * @ORM\Entity
 */
class DeliveryMan
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
     * @ORM\Column(name="first_name", type="string", length=45, nullable=true)
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=true)
     */
    private $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address1", type="string", length=45, nullable=true)
     */
    private $address1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address2", type="string", length=45, nullable=true)
     */
    private $address2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone1", type="string", length=45, nullable=true)
     */
    private $telephone1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone2", type="string", length=45, nullable=true)
     */
    private $telephone2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NationalID", type="string", length=45, nullable=true)
     */
    private $nationalid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picture", type="blob", length=65535, nullable=true)
     */
    private $picture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=45, nullable=true)
     */
    private $note;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="available", type="boolean", nullable=true)
     */
    private $available;

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
