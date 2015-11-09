<?php

namespace Lumen\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * QuoteDetail
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Entity\QuoteDetailRepository")
 */
class QuoteDetail
{
     /**
     * @ORM\ManyToOne(targetEntity="Quote", inversedBy="quoteDetail")
     */
    protected $quote;
     
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
     * @ORM\Column(name="QuoteID", type="integer")
     */
    private $quoteID;

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
     * @ORM\Column(name="Hours", type="integer")
     */
    private $hours;

    /**
     * @var integer
     *
     * @ORM\Column(name="Price", type="integer")
     */
    private $price;

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
     * Set quoteID
     *
     * @param integer $quoteID
     * @return QuoteDetail
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
     * Set area
     *
     * @param string $area
     * @return QuoteDetail
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
     * @return QuoteDetail
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
     * Set hours
     *
     * @param integer $hours
     * @return QuoteDetail
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     * @return integer 
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return QuoteDetail
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return QuoteDetail
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
     * Set quote
     *
     * @param \Lumen\AppBundle\Entity\Quote $quote
     * @return QuoteDetail
     */
    public function setQuote(\Lumen\AppBundle\Entity\Quote $quote = null)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote
     *
     * @return \Lumen\AppBundle\Entity\Quote 
     */
    public function getQuote()
    {
        return $this->quote;
    }
}
