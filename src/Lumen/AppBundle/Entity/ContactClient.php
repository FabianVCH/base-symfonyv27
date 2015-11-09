<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactClient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Entity\ContactClientRepository")
 */
class ContactClient
{
        /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="contactClient")
     */
    protected $client;
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
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50)
     */
    private $name;

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
     * @return ContactClient
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
     * Set name
     *
     * @param string $name
     * @return ContactClient
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
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     * @return ContactClient
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
     * @return ContactClient
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
     * Set client
     *
     * @param \Lumen\AppBundle\Entity\Client $client
     * @return ContactClient
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
