<?php

namespace Acme\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QaWords
 */
class QaWords
{
    /**
     * @var integer
     */
    private $wordid;

    /**
     * @var string
     */
    private $word;

    /**
     * @var integer
     */
    private $titlecount;

    /**
     * @var integer
     */
    private $contentcount;

    /**
     * @var integer
     */
    private $tagwordcount;

    /**
     * @var integer
     */
    private $tagcount;


    /**
     * Get wordid
     *
     * @return integer 
     */
    public function getWordid()
    {
        return $this->wordid;
    }

    /**
     * Set word
     *
     * @param string $word
     * @return QaWords
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set titlecount
     *
     * @param integer $titlecount
     * @return QaWords
     */
    public function setTitlecount($titlecount)
    {
        $this->titlecount = $titlecount;

        return $this;
    }

    /**
     * Get titlecount
     *
     * @return integer 
     */
    public function getTitlecount()
    {
        return $this->titlecount;
    }

    /**
     * Set contentcount
     *
     * @param integer $contentcount
     * @return QaWords
     */
    public function setContentcount($contentcount)
    {
        $this->contentcount = $contentcount;

        return $this;
    }

    /**
     * Get contentcount
     *
     * @return integer 
     */
    public function getContentcount()
    {
        return $this->contentcount;
    }

    /**
     * Set tagwordcount
     *
     * @param integer $tagwordcount
     * @return QaWords
     */
    public function setTagwordcount($tagwordcount)
    {
        $this->tagwordcount = $tagwordcount;

        return $this;
    }

    /**
     * Get tagwordcount
     *
     * @return integer 
     */
    public function getTagwordcount()
    {
        return $this->tagwordcount;
    }

    /**
     * Set tagcount
     *
     * @param integer $tagcount
     * @return QaWords
     */
    public function setTagcount($tagcount)
    {
        $this->tagcount = $tagcount;

        return $this;
    }

    /**
     * Get tagcount
     *
     * @return integer 
     */
    public function getTagcount()
    {
        return $this->tagcount;
    }
}
