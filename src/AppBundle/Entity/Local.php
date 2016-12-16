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
     * @ORM\GeneratedValue()
     */
    private $id;

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
     * @ORM\ManyToOne(targetEntity="Planta", inversedBy="locales")
     */
    private $planta;

    /**
     * @var Material[]
     * @ORM\OneToMany(targetEntity="Material", mappedBy="local")
     */
    private $materiales;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->materiales = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Local
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Local
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set curso
     *
     * @param string $curso
     *
     * @return Local
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return string
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Add usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Local
     */
    public function addUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuarios[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     */
    public function removeUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuarios->removeElement($usuario);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }

    /**
     * Set planta
     *
     * @param \AppBundle\Entity\Planta $planta
     *
     * @return Local
     */
    public function setPlanta(\AppBundle\Entity\Planta $planta = null)
    {
        $this->planta = $planta;

        return $this;
    }

    /**
     * Get planta
     *
     * @return \AppBundle\Entity\Planta
     */
    public function getPlanta()
    {
        return $this->planta;
    }

    /**
     * Add materiale
     *
     * @param \AppBundle\Entity\Material $materiale
     *
     * @return Local
     */
    public function addMateriale(\AppBundle\Entity\Material $materiale)
    {
        $this->materiales[] = $materiale;

        return $this;
    }

    /**
     * Remove materiale
     *
     * @param \AppBundle\Entity\Material $materiale
     */
    public function removeMateriale(\AppBundle\Entity\Material $materiale)
    {
        $this->materiales->removeElement($materiale);
    }

    /**
     * Get materiales
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMateriales()
    {
        return $this->materiales;
    }
}
