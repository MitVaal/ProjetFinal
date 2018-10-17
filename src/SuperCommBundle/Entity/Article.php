<?php

namespace SuperCommBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\User;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="SuperCommBundle\Repository\Article")
 */
class Article
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string")
     */
    private $author;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $dateOnPublished;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string")
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \SuperCommBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="SuperCommBundle\Entity\User", inversedBy="article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SuperCommBundle\Entity\Category")
     * @ORM\JoinTable(name="article_category",
     *   joinColumns={
     *     @ORM\JoinColumn(name="article_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="CASCADE")
     *   }
     * )
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

