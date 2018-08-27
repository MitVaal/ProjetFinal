<?php

namespace SuperCommBundle\Entity;

/**
 * Prospect
 */
class Prospect
{
    /**
     * @var string
     */
    private $civility;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $status;

    /**
     * @var integer
     */
    private $id;


    public function __toString()
    {
        return $this->lastname;
    }

    /**
     * Set civility
     *
     * @param string $civility
     *
     * @return Prospect
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;

        return $this;
    }

    /**
     * Get civility
     *
     * @return string
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Prospect
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Prospect
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Prospect
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
     * Set password
     *
     * @param string $password
     *
     * @return Prospect
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Prospect
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $upload;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->upload = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add upload
     *
     * @param \SuperCommBundle\Entity\Upload $upload
     *
     * @return Prospect
     */
    public function addUpload(\SuperCommBundle\Entity\Upload $upload)
    {
        $this->upload[] = $upload;

        return $this;
    }

    /**
     * Remove upload
     *
     * @param \SuperCommBundle\Entity\Upload $upload
     */
    public function removeUpload(\SuperCommBundle\Entity\Upload $upload)
    {
        $this->upload->removeElement($upload);
    }

    /**
     * Get upload
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUpload()
    {
        return $this->upload;
    }
}
