<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 7/9/22
 * Time: 12:24 PM
 */

namespace Formodule\Module\Model;


use Magento\Framework\Model\AbstractModel;
use Formodule\Module\Model\ResourceModel\NewMagento as NewMagentoResource;
use Formodule\Module\Api\Data\NewMagentoInterface;

class NewMagento extends AbstractModel implements NewMagentoInterface{

    protected function _construct()
    {
        $this->_init(NewMagentoResource::class);
    }

    public function getId()
    {
        return $this->getData(NewMagentoInterface::Id);
    }

    public function getTitle()
    {
        return $this->getData(NewMagentoInterface::Title);
    }

    public function setTitle($title)
    {
        $this->setData(NewMagentoInterface::Title,$title);
    }

    public function getDescription()
    {
        return $this->getData(NewMagentoInterface::Description);
    }

    public function setDescription($Description)
    {
        $this->setData(NewMagentoInterface::Description,$Description);
    }

    public function getStatus()
    {
        return $this->getData(NewMagentoInterface::Status);
    }

    public function setStatus($status)
    {
        $this->setData(NewMagentoInterface::Status,$status);
    }
}