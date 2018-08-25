<?php

namespace SuperCommBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $article;


    /**
     * Add article
     *
     * @param \SuperCommBundle\Entity\Article $article
     *
     * @return User
     */
    public function addArticle(\SuperCommBundle\Entity\Article $article)
    {
        $this->article[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \SuperCommBundle\Entity\Article $article
     */
    public function removeArticle(\SuperCommBundle\Entity\Article $article)
    {
        $this->article->removeElement($article);
    }

    /**
     * Get article
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticle()
    {
        return $this->article;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $product;


    /**
     * Add product
     *
     * @param \SuperCommBundle\Entity\Product $product
     *
     * @return User
     */
    public function addProduct(\SuperCommBundle\Entity\Product $product)
    {
        $this->product[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \SuperCommBundle\Entity\Product $product
     */
    public function removeProduct(\SuperCommBundle\Entity\Product $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduct()
    {
        return $this->product;
    }
}
