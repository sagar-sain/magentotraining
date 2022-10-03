<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 7/9/22
 * Time: 12:18 PM
 */

namespace Formodule\Module\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class NewMagento extends AbstractDb
{

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init("New_Magento",'id');
    }
}