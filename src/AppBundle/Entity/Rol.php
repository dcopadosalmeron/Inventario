<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 * @ORM\Entity
 */
class Rol
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $idRol;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nombre;

    /**
     * @var Usuario[]
     * @ORM\OneToMany(targetEntity="Usuario", mappedBy="usuarios")
     */
    private $usuarios;

}