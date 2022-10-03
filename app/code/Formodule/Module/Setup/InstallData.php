<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 6/9/22
 * Time: 11:15 AM
 */
namespace Formodule\Module\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{
    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup ->startSetup();

        $setup->getConnection()->insert(

            $setup->getTable('New_Magento'),
            ['title'=>'Hi installData','description'=>'Hi added by installData']
        );

        $setup ->endSetup();
    }
}