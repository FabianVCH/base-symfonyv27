<?php

namespace Lumen\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Cost
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Entity\CostRepository")
 */
class Cost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Area", type="string", length=50)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="Level", type="string", length=50)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="Price_Per_Hour", type="integer")
     */
    private $pricePerHour;


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
     * Set area
     *
     * @param string $area
     * @return Cost
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return Cost
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set pricePerHour
     *
     * @param integer $pricePerHour
     * @return Cost
     */
    public function setPricePerHour($pricePerHour)
    {
        $this->pricePerHour = $pricePerHour;

        return $this;
    }

    /**
     * Get pricePerHour
     *
     * @return integer 
     */
    public function getPricePerHour()
    {
        return $this->pricePerHour;
    }
}
