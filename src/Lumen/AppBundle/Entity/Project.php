<?php

namespace Lumen\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Entity\ProjectRepository")
 */
class Project
{
      // ...
 
         /**
     * @ORM\OneToOne(targetEntity="Team", mappedBy="project")
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
     * @ORM\Column(name="ProjectName", type="string", length=50)
     */
    private $projectName;

    /**
     * @var integer
     *
     * @ORM\Column(name="QuoteID", type="integer")
     */
    private $quoteID;


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
     * Set projectName
     *
     * @param string $projectName
     * @return Project
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string 
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set quoteID
     *
     * @param integer $quoteID
     * @return Project
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;

        return $this;
    }

    /**
     * Get quoteID
     *
     * @return integer 
     */
    public function getQuoteID()
    {
        return $this->quoteID;
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
     * @return Project
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

    /**
     * Set team
     *
     * @param \Lumen\AppBundle\Entity\Team $team
     * @return Project
     */
    public function setTeam(\Lumen\AppBundle\Entity\Team $team = null)
    {
        $this->team = $team;

        return $this;
    }
}
