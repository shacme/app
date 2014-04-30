<?php

namespace Acme\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QaNews
 */
class QaNews
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $catid;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $titleAlias;

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
    private $introText;

    /**
     * @var string
     */
    private $fullText;

    /**
     * @var integer
     */
    private $state;

    /**
     * @var string
     */
    private $images;

    /**
     * @var string
     */
    private $urls;

    /**
     * @var integer
     */
    private $hits;

    /**
     * @var integer
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $dateAddedBy;

    /**
     * @var integer
     */
    private $dateModified;

    /**
     * @var integer
     */
    private $dateModifiedBy;


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
     * Set catid
     *
     * @param integer $catid
     * @return QaNews
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;

        return $this;
    }

    /**
     * Get catid
     *
     * @return integer 
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return QaNews
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
     * Set alias
     *
     * @param string $alias
     * @return QaNews
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set titleAlias
     *
     * @param string $titleAlias
     * @return QaNews
     */
    public function setTitleAlias($titleAlias)
    {
        $this->titleAlias = $titleAlias;

        return $this;
    }

    /**
     * Get titleAlias
     *
     * @return string 
     */
    public function getTitleAlias()
    {
        return $this->titleAlias;
    }

    /**
     * Set metaKey
     *
     * @param string $metaKey
     * @return QaNews
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
     * @return QaNews
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
     * Set introText
     *
     * @param string $introText
     * @return QaNews
     */
    public function setIntroText($introText)
    {
        $this->introText = $introText;

        return $this;
    }

    /**
     * Get introText
     *
     * @return string 
     */
    public function getIntroText()
    {
        return $this->introText;
    }

    /**
     * Set fullText
     *
     * @param string $fullText
     * @return QaNews
     */
    public function setFullText($fullText)
    {
        $this->fullText = $fullText;

        return $this;
    }

    /**
     * Get fullText
     *
     * @return string 
     */
    public function getFullText()
    {
        return $this->fullText;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return QaNews
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set images
     *
     * @param string $images
     * @return QaNews
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set urls
     *
     * @param string $urls
     * @return QaNews
     */
    public function setUrls($urls)
    {
        $this->urls = $urls;

        return $this;
    }

    /**
     * Get urls
     *
     * @return string 
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     * @return QaNews
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer 
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set dateAdded
     *
     * @param integer $dateAdded
     * @return QaNews
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
     * Set dateAddedBy
     *
     * @param integer $dateAddedBy
     * @return QaNews
     */
    public function setDateAddedBy($dateAddedBy)
    {
        $this->dateAddedBy = $dateAddedBy;

        return $this;
    }

    /**
     * Get dateAddedBy
     *
     * @return integer 
     */
    public function getDateAddedBy()
    {
        return $this->dateAddedBy;
    }

    /**
     * Set dateModified
     *
     * @param integer $dateModified
     * @return QaNews
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

    /**
     * Set dateModifiedBy
     *
     * @param integer $dateModifiedBy
     * @return QaNews
     */
    public function setDateModifiedBy($dateModifiedBy)
    {
        $this->dateModifiedBy = $dateModifiedBy;

        return $this;
    }

    /**
     * Get dateModifiedBy
     *
     * @return integer 
     */
    public function getDateModifiedBy()
    {
        return $this->dateModifiedBy;
    }
}
