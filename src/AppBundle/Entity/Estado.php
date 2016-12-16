<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 * @ORM\Entity
 */
class Estado
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $idEstado;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nombre;

    /**
     * @var Material[]
     * @ORM\OneToMany(targetEntity="Material", mappedBy="materiales")
     */
    private $materiales;

}