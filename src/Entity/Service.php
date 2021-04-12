<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service", indexes={@ORM\Index(name="fk_service_pays1", columns={"country_id"})})
 * @ORM\Entity
 */
class Service
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
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

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
     * @var int|null
     *
     * @ORM\Column(name="parentId", type="integer", nullable=true)
     */
    private $parentid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=45, nullable=true)
     */
    private $note;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verified", type="boolean", nullable=true)
     */
    private $verified;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="approved", type="boolean", nullable=true)
     */
    private $approved;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;
}
