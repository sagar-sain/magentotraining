<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 8/9/22
 * Time: 11:48 AM
 */

namespace Formodule\Module\Model\ResourceModel\NewMagento;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Formodule\Module\Model\ResourceModel\NewMagento as NewMagentoResource;
use Formodule\Module\Model\NewMagento;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init(NewMagento::class,NewMagentoResource::class);
    }
}