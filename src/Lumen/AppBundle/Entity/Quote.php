<?php

namespace Lumen\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Quote
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Entity\QuoteRepository")
 */
class Quote
{
     // ...
 
         /**
     * @ORM\OneToOne(targetEntity="Client", mappedBy="quote")
     */
    protected $client;    
    
      // ...
 
         /**
     * @ORM\OneToMany(targetEntity="QuoteDetail", mappedBy="quote")
     */
    protected $quoteDetail;    
    
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
     * @ORM\Column(name="ClientID", type="integer")
     */
    private $clientID;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserID", type="integer")
     */
    private $userID;

    /**
     * @var integer
     *
     * @ORM\Column(name="Status", type="integer")
     */
    private $status;

    /**
     * @var \integer
     *
     * @ORM\Column(name="TotalHours", type="integer")
     */
    private $totalHours;

    /**
     * @var integer
     *
     * @ORM\Column(name="FinalCost", type="integer")
     */
    private $finalCost;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;


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
     * Set clientID
     *
     * @param integer $clientID
     * @return Quote
     */
    public function setClientID($clientID)
    {
        $this->clientID = $clientID;

        return $this;
    }

    /**
     * Get clientID
     *
     * @return integer 
     */
    public function getClientID()
    {
        return $this->clientID;
    }

    /**
     * Set userID
     *
     * @param integer $userID
     * @return Quote
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    /**
     * Get userID
     *
     * @return integer 
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Quote
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set totalHours
     *
     * @param integer $totalHours
     * @return Quote
     */
    public function setTotalHours($totalHours)
    {
        $this->totalHours = $totalHours;

        return $this;
    }

    /**
     * Get totalHours
     *
     * @return \integer 
     */
    public function getTotalHours()
    {
        return $this->totalHours;
    }

    /**
     * Set finalCost
     *
     * @param integer $finalCost
     * @return Quote
     */
    public function setFinalCost($finalCost)
    {
        $this->finalCost = $finalCost;

        return $this;
    }

    /**
     * Get finalCost
     *
     * @return integer 
     */
    public function getFinalCost()
    {
        return $this->finalCost;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Quote
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Add QuoteDetail
     *
     * @param \Lumen\AppBundle\Entity\QuoteDetail $quoteDetail
     * @return Quote
     */
    public function addQuoteDetail(\Lumen\AppBundle\Entity\QuoteDetail $quoteDetail)
    {
        $this->QuoteDetail[] = $quoteDetail;

        return $this;
    }

    /**
     * Remove QuoteDetail
     *
     * @param \Lumen\AppBundle\Entity\QuoteDetail $quoteDetail
     */
    public function removeQuoteDetail(\Lumen\AppBundle\Entity\QuoteDetail $quoteDetail)
    {
        $this->QuoteDetail->removeElement($quoteDetail);
    }

    /**
     * Get QuoteDetail
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuoteDetail()
    {
        return $this->QuoteDetail;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quoteDetail = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set client
     *
     * @param \Lumen\AppBundle\Entity\Client $client
     * @return Quote
     */
    public function setClient(\Lumen\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Lumen\AppBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
}
