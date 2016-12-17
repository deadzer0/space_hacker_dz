<?php

namespace GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanetResource
 *
 * @ORM\Table(name="planet_resource")
 * @ORM\Entity(repositoryClass="GameBundle\Repository\PlanetResourceRepository")
 */
class PlanetResource
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
     * @ORM\Column(name="planet", type="string", length=255)
     */
    private $planet;

    /**
     * @var string
     *
     * @ORM\Column(name="resource", type="string", length=255)
     */
    private $resource;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set planet
     *
     * @param string $planet
     *
     * @return PlanetResource
     */
    public function setPlanet($planet)
    {
        $this->planet = $planet;

        return $this;
    }

    /**
     * Get planet
     *
     * @return string
     */
    public function getPlanet()
    {
        return $this->planet;
    }

    /**
     * Set resource
     *
     * @param string $resource
     *
     * @return PlanetResource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return PlanetResource
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
}

