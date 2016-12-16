<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Local
 * @ORM\Entity
 */
class Local
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $idLocal;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nombre;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $descripcion;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $curso;

    /**
     * @var Usuario[]
     * @ORM\ManyToMany(targetEntity="Usuario", mappedBy="locales")
     */
    private $usuarios;

    /**
     * @var Planta
     * @ORM\ManyToOne(targetEntity="Planta", inversedBy="planta")
     */
    private $planta;

    /**
     * @var Material[]
     * @ORM\OneToMany(targetEntity="Material", mappedBy="materiales")
     */
    private $materiales;

}