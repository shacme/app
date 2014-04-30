<?php

namespace Acme\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QaCategories
 */
class QaCategories
{
    /**
     * @var integer
     */
    private $categoryid;

    /**
     * @var integer
     */
    private $parentid;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $tags;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $qcount;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var string
     */
    private $backpath;


    /**
     * Get categoryid
     *
     * @return integer 
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set parentid
     *
     * @param integer $parentid
     * @return QaCategories
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return QaCategories
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
     * Set tags
     *
     * @param string $tags
     * @return QaCategories
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return QaCategories
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
     * Set qcount
     *
     * @param integer $qcount
     * @return QaCategories
     */
    public function setQcount($qcount)
    {
        $this->qcount = $qcount;

        return $this;
    }

    /**
     * Get qcount
     *
     * @return integer 
     */
    public function getQcount()
    {
        return $this->qcount;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return QaCategories
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set backpath
     *
     * @param string $backpath
     * @return QaCategories
     */
    public function setBackpath($backpath)
    {
        $this->backpath = $backpath;

        return $this;
    }

    /**
     * Get backpath
     *
     * @return string 
     */
    public function getBackpath()
    {
        return $this->backpath;
    }
}
