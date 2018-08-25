<?php

namespace SuperCommBundle\Entity;

/**
 * Upload
 */
class Upload
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $media;

    /**
     * @var integer
     */
    private $id;

    public function __toString()
    {
        return $this->title;
    }


    /**
     * Set title
     *
     * @param string $title
     *
     * @return Upload
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Upload
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set media
     *
     * @param string $media
     *
     * @return Upload
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
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
     * @var \SuperCommBundle\Entity\Prospect
     */
    private $lastname;


    /**
     * Set lastname
     *
     * @param \SuperCommBundle\Entity\Prospect $lastname
     *
     * @return Upload
     */
    public function setLastname(\SuperCommBundle\Entity\Prospect $lastname = null)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return \SuperCommBundle\Entity\Prospect
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    /**
     * @var \SuperCommBundle\Entity\Prospect
     */
    private $prospect;


    /**
     * Set prospect
     *
     * @param \SuperCommBundle\Entity\Prospect $prospect
     *
     * @return Upload
     */
    public function setProspect(\SuperCommBundle\Entity\Prospect $prospect = null)
    {
        $this->prospect = $prospect;

        return $this;
    }

    /**
     * Get prospect
     *
     * @return \SuperCommBundle\Entity\Prospect
     */
    public function getProspect()
    {
        return $this->prospect;
    }
}
