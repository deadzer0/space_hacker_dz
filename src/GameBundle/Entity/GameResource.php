<?php

namespace GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameResource
 *
 * @ORM\Table(name="game_resource")
 * @ORM\Entity(repositoryClass="GameBundle\Repository\GameResourceRepository")
 */
class GameResource
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="buildingCosts", type="string", length=255)
     */
    private $buildingCosts;

    /**
     * @var string
     *
     * @ORM\Column(name="planetResources", type="string", length=255)
     */
    private $planetResources;


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
     * @return GameResource
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
     * Set buildingCosts
     *
     * @param string $buildingCosts
     *
     * @return GameResource
     */
    public function setBuildingCosts($buildingCosts)
    {
        $this->buildingCosts = $buildingCosts;

        return $this;
    }

    /**
     * Get buildingCosts
     *
     * @return string
     */
    public function getBuildingCosts()
    {
        return $this->buildingCosts;
    }

    /**
     * Set planetResources
     *
     * @param string $planetResources
     *
     * @return GameResource
     */
    public function setPlanetResources($planetResources)
    {
        $this->planetResources = $planetResources;

        return $this;
    }

    /**
     * Get planetResources
     *
     * @return string
     */
    public function getPlanetResources()
    {
        return $this->planetResources;
    }
}

