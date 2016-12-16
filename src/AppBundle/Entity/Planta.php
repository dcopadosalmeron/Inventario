<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planta
 * @ORM\Entity
 */
class Planta
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $idPlanta;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nombre;

    /**
     * @var Local[]
     * @ORM\OneToMany(targetEntity="Local", mappedBy="locales")
     */
    private $locales;

}