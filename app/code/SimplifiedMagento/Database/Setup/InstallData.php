<?php
/**
 * Created by PhpStorm.
 * User: sigma
 * Date: 6/9/22
 * Time: 4:16 PM
 */

namespace SimplifiedMagento\Database\Setup;


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
       $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('affiliate member'),
            ['name'=>'Rohan', 'address'=>'Jaipur', 'status'=>true ]
        );


        $setup->getConnection()->insert(
            $setup->getTable('affiliate member'),
            ['name'=>'Dharmendra', 'address'=>'Baswara']
        );

        $setup->endSetup();
    }
}