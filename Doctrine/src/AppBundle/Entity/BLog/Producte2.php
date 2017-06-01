<?php

namespace AppBundle\Entity\BLog;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producte2
 *
 * @ORM\Table(name="b_log_producte2")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BLog\Producte2Repository")
 */
class Producte2
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="time")
     */
    private $fecha;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

      private $postad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="time")
     */
    private $fecha;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Producte2
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Producte2
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}

