<?php

namespace Lumen\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Entity\ClientRepository")
 */
class Client
{
        /**
     * @ORM\OneToMany(targetEntity="ContactClient", mappedBy="client")
     */
    protected $contactClient;  
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
     * @ORM\Column(name="ClientName", type="string", length=50)
     */
    private $clientName;

    /**
     * @var integer
     *
     * @ORM\Column(name="PhoneNumber", type="integer")
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="LegalID", type="integer")
     */
    private $legalID;

    /**
     * @var integer
     *
     * @ORM\Column(name="Type", type="integer")
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
     * Set clientName
     *
     * @param string $clientName
     * @return Client
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * Get clientName
     *
     * @return string 
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     * @return Client
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return integer 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Client
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
     * Set legalID
     *
     * @param integer $legalID
     * @return Client
     */
    public function setLegalID($legalID)
    {
        $this->legalID = $legalID;

        return $this;
    }

    /**
     * Get legalID
     *
     * @return integer 
     */
    public function getLegalID()
    {
        return $this->legalID;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Client
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contactClient = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contactClient
     *
     * @param \Lumen\AppBundle\Entity\ContactClient $contactClient
     * @return Client
     */
    public function addContactClient(\Lumen\AppBundle\Entity\ContactClient $contactClient)
    {
        $this->contactClient[] = $contactClient;

        return $this;
    }

    /**
     * Remove contactClient
     *
     * @param \Lumen\AppBundle\Entity\ContactClient $contactClient
     */
    public function removeContactClient(\Lumen\AppBundle\Entity\ContactClient $contactClient)
    {
        $this->contactClient->removeElement($contactClient);
    }

    /**
     * Get contactClient
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContactClient()
    {
        return $this->contactClient;
    }
}
