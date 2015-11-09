<?php

namespace Lumen\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Entity\EmployeeRepository")
 */
class Employee
{
    /**
     * @ORM\ManyToMany(targetEntity="Team", inversedBy="employee")
     */
    protected $team;
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
     * @ORM\Column(name="Name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Job", type="string", length=50)
     */
    private $job;

    /**
     * @var string
     *
     * @ORM\Column(name="Level", type="string", length=50)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="CostPerHour", type="integer")
     */
    private $costPerHour;


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
     * Set name
     *
     * @param string $name
     * @return Employee
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
     * Set job
     *
     * @param string $job
     * @return Employee
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return Employee
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
     * Set email
     *
     * @param string $email
     * @return Employee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set costPerHour
     *
     * @param integer $costPerHour
     * @return Employee
     */
    public function setCostPerHour($costPerHour)
    {
        $this->costPerHour = $costPerHour;

        return $this;
    }

    /**
     * Get costPerHour
     *
     * @return integer 
     */
    public function getCostPerHour()
    {
        return $this->costPerHour;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->team = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add team
     *
     * @param \Lumen\AppBundle\Entity\Team $team
     * @return Employee
     */
    public function addTeam(\Lumen\AppBundle\Entity\Team $team)
    {
        $this->team[] = $team;

        return $this;
    }

    /**
     * Remove team
     *
     * @param \Lumen\AppBundle\Entity\Team $team
     */
    public function removeTeam(\Lumen\AppBundle\Entity\Team $team)
    {
        $this->team->removeElement($team);
    }

    /**
     * Get team
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeam()
    {
        return $this->team;
    }
}
