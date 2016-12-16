<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Material
 * @ORM\Entity
 */
class Material
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $idMaterial;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $numSerie;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $marca;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $modelo;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $descripcion;

    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private $fechaBaja;

    /**
     * @var Local
     * @ORM\ManyToOne(targetEntity="Local", inversedBy="local")
     */
    private $local;

    /**
     * @var Estado
     * @ORM\ManyToOne(targetEntity="Estado", inversedBy="estado")
     */
    private $estado;


}