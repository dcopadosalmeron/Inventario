<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $idUsuario;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $dni;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nombre;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $apellidos;

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
     * @var string
     * @ORM\Column(type="string")
     */
    private $usuario;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $contrasena;

    /**
     * @var Local[]
     * @ORM\ManyToMany(targetEntity="Local", inversedBy="usuarios")
     */
    private $locales;

    /**
     * @var Rol
     * @ORM\ManyToOne(targetEntity="Rol", inversedBy="usuarios")
     */
    private $rol;


}