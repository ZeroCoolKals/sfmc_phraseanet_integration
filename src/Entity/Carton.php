<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Carton
 *
 * @ORM\Table(name="carton")
 * @ORM\Entity
 */
class Carton
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
     * @ORM\Column(name="libelle", type="string", length=45, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longueur", type="string", length=45, nullable=true)
     */
    private $longueur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="largeur", type="string", length=45, nullable=true)
     */
    private $largeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hauteur", type="string", length=45, nullable=true)
     */
    private $hauteur;
}
