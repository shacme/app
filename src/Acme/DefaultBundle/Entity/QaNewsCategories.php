<?php

namespace Acme\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QaNewsCategories
 */
class QaNewsCategories
{
    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var integer
     */
    private $parentId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $desc;

    /**
     * @var string
     */
    private $metaKey;

    /**
     * @var string
     */
    private $metaDesc;

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $dateModified;


    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return QaNewsCategories
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return QaNewsCategories
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
     * Set desc
     *
     * @param string $desc
     * @return QaNewsCategories
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set metaKey
     *
     * @param string $metaKey
     * @return QaNewsCategories
     */
    public function setMetaKey($metaKey)
    {
        $this->metaKey = $metaKey;

        return $this;
    }

    /**
     * Get metaKey
     *
     * @return string 
     */
    public function getMetaKey()
    {
        return $this->metaKey;
    }

    /**
     * Set metaDesc
     *
     * @param string $metaDesc
     * @return QaNewsCategories
     */
    public function setMetaDesc($metaDesc)
    {
        $this->metaDesc = $metaDesc;

        return $this;
    }

    /**
     * Get metaDesc
     *
     * @return string 
     */
    public function getMetaDesc()
    {
        return $this->metaDesc;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return QaNewsCategories
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     * @return QaNewsCategories
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer 
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return QaNewsCategories
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
     * Set dateAdded
     *
     * @param integer $dateAdded
     * @return QaNewsCategories
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return integer 
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateModified
     *
     * @param integer $dateModified
     * @return QaNewsCategories
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return integer 
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }
}
