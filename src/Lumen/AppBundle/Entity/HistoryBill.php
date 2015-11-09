<?php

namespace Lumen\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * HistoryBill
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Entity\HistoryBillRepository")
 */
class HistoryBill
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
     * @var integer
     *
     * @ORM\Column(name="QuoteID", type="integer")
     */
    private $quoteID;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserID", type="integer")
     */
    private $userID;

    /**
     * @var integer
     *
     * @ORM\Column(name="ClientID", type="integer")
     */
    private $clientID;

    /**
     * @var string
     *
     * @ORM\Column(name="Detail", type="string", length=100)
     */
    private $detail;

    /**
     * @var integer
     *
     * @ORM\Column(name="TotalPay", type="integer")
     */
    private $totalPay;

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
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=50)
     */
    private $type;


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
     * @return HistoryBill
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
     * Set userID
     *
     * @param integer $userID
     * @return HistoryBill
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
     * Set clientID
     *
     * @param integer $clientID
     * @return HistoryBill
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
     * Set detail
     *
     * @param string $detail
     * @return HistoryBill
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set totalPay
     *
     * @param integer $totalPay
     * @return HistoryBill
     */
    public function setTotalPay($totalPay)
    {
        $this->totalPay = $totalPay;

        return $this;
    }

    /**
     * Get totalPay
     *
     * @return integer 
     */
    public function getTotalPay()
    {
        return $this->totalPay;
    }

    /**
     * Set finalCost
     *
     * @param integer $finalCost
     * @return HistoryBill
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
     * @return HistoryBill
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
     * Set type
     *
     * @param string $type
     * @return HistoryBill
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
