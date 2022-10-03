<?php

namespace Thecoachsmb\Mymodule\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;

const ID            = 'id';
const TITLE         = 'title';
const DESCRIPTION   = 'description';
const IMAGE         = 'banner';


/**
 * Class File
 * @package Thecoachsmb\Mymodule\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class View extends AbstractModel implements IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'thecoachsmb_mymodule_view';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Thecoachsmb\Mymodule\Model\ResourceModel\View');
    }


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->getData(TITLE);
    }

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->getData(DESCRIPTION);
    }


    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(ID);
    }

    /**
     * @return mixed
     */

    public function getImage()
    {
        return $this->getData(IMAGE);
    }

    /**
     * Return identities
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->setData(TITLE, $title);
    }

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        return $this->setData(CONTENT, $content);
    }




    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(ID, $id);
    }
}