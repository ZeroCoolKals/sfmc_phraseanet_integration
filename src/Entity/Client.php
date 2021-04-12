<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
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
     * @ORM\Column(name="Telephone1", type="string", length=45, nullable=true)
     */
    private $telephone1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telephone2", type="string", length=45, nullable=true)
     */
    private $telephone2;
}
