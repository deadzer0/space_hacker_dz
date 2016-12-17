<?php

namespace GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanetBuildings
 *
 * @ORM\Table(name="planet_buildings")
 * @ORM\Entity(repositoryClass="GameBundle\Repository\PlanetBuildingsRepository")
 */
class PlanetBuildings
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
     * @ORM\Column(name="building", type="string", length=255)
     */
    private $building;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;


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
     * @return PlanetBuildings
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
     * Set building
     *
     * @param string $building
     *
     * @return PlanetBuildings
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return PlanetBuildings
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }
}

