<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedor
 * @ORM\Entity
 */
class Proveedor
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $idProveedor;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $cif;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nombre;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $telefono;

    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private $fechaCompra;

    /**
     * @var Material[]
     * @ORM\OneToMany(targetEntity="Material", mappedBy="materiales")
     */
    private $materiales;



}