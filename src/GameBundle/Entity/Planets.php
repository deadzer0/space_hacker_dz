<?php

namespace GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planets
 *
 * @ORM\Table(name="planets")
 * @ORM\Entity(repositoryClass="GameBundle\Repository\PlanetsRepository")
 */
class Planets
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="x", type="integer")
     */
    private $x;

    /**
     * @var int
     *
     * @ORM\Column(name="y", type="integer")
     */
    private $y;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255)
     */
    private $owner;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="GameBundle\Entity\User", inversedBy="planets")
     * @ORM\JoinColumn(name="player_id")
     *
     */
    private $player_Id;

    /**
     * @var string
     *
     * @ORM\Column(name="resources", type="string", length=255)
     */
    private $resources;

    /**
     * @var string
     *
     * @ORM\Column(name="buildings", type="string", length=255)
     */
    private $buildings;


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
     * Set name
     *
     * @param string $name
     *
     * @return Planets
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
     * Set x
     *
     * @param integer $x
     *
     * @return Planets
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param integer $y
     *
     * @return Planets
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return Planets
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set resources
     *
     * @param string $resources
     *
     * @return Planets
     */
    public function setResources($resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * Get resources
     *
     * @return string
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Set buildings
     *
     * @param string $buildings
     *
     * @return Planets
     */
    public function setBuildings($buildings)
    {
        $this->buildings = $buildings;

        return $this;
    }

    /**
     * Get buildings
     *
     * @return string
     */
    public function getBuildings()
    {
        return $this->buildings;
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     *
     * @return int
     */
    public function getPlayerId()
    {
        return $this->player_Id;
    }

    /**
     * @param integer $player_Id
     */
    public function setPlayerId($player_Id)
    {
        $this->player_Id = $player_Id;
    }
}

