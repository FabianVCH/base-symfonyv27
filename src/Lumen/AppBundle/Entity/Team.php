<?php

namespace Lumen\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Entity\TeamRepository")
 */
class Team
{
     /**
     * @ORM\OneToOne(targetEntity="Project", inversedBy="team")
     */
    protected $project;
    
      // ...
 
         /**
     * @ORM\ManyToMany(targetEntity="Employee", mappedBy="team")
     */
    protected $employee; 
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ProjectID", type="integer")
     */
    private $projectID;


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
     * Set projectID
     *
     * @param integer $projectID
     * @return Team
     */
    public function setProjectID($projectID)
    {
        $this->projectID = $projectID;

        return $this;
    }

    /**
     * Get projectID
     *
     * @return integer 
     */
    public function getProjectID()
    {
        return $this->projectID;
    }

    /**
     * Set project
     *
     * @param \Lumen\AppBundle\Entity\Project $project
     * @return Team
     */
    public function setProject(\Lumen\AppBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \Lumen\AppBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->employee = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add employee
     *
     * @param \Lumen\AppBundle\Entity\Employee $employee
     * @return Team
     */
    public function addEmployee(\Lumen\AppBundle\Entity\Employee $employee)
    {
        $this->employee[] = $employee;

        return $this;
    }

    /**
     * Remove employee
     *
     * @param \Lumen\AppBundle\Entity\Employee $employee
     */
    public function removeEmployee(\Lumen\AppBundle\Entity\Employee $employee)
    {
        $this->employee->removeElement($employee);
    }

    /**
     * Get employee
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}
