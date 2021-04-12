<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * CampagneAds
 *
 * @ORM\Table(name="campagne_ads", indexes={@ORM\Index(name="fk_Campagne_service1", columns={"service_id"})})
 * @ORM\Entity
 */
class CampagneAds
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
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="activate", type="boolean", nullable=true)
     */
    private $activate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="budget", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $budget;

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
