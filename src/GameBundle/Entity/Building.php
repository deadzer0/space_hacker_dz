<?php

namespace GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Building
 *
 * @ORM\Table(name="building")
 * @ORM\Entity(repositoryClass="GameBundle\Repository\BuildingRepository")
 */
class Building
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
     * @ORM\Column(name="costs", type="string", length=255)
     */
    private $costs;

    /**
     * @var string
     *
     * @ORM\Column(name="timeCost", type="string", length=255)
     */
    private $timeCost;

    /**
     * @var string
     *
     * @ORM\Column(name="planetBuildings", type="string", length=255)
     */
    private $planetBuildings;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set costs
     *
     * @param string $costs
     *
     * @return Building
     */
    public function setCosts($costs)
    {
        $this->costs = $costs;

        return $this;
    }

    /**
     * Get costs
     *
     * @return string
     */
    public function getCosts()
    {
        return $this->costs;
    }

    /**
     * Set timeCost
     *
     * @param string $timeCost
     *
     * @return Building
     */
    public function setTimeCost($timeCost)
    {
        $this->timeCost = $timeCost;

        return $this;
    }

    /**
     * Get timeCost
     *
     * @return string
     */
    public function getTimeCost()
    {
        return $this->timeCost;
    }

    /**
     * Set planetBuildings
     *
     * @param string $planetBuildings
     *
     * @return Building
     */
    public function setPlanetBuildings($planetBuildings)
    {
        $this->planetBuildings = $planetBuildings;

        return $this;
    }

    /**
     * Get planetBuildings
     *
     * @return string
     */
    public function getPlanetBuildings()
    {
        return $this->planetBuildings;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Building
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
}

