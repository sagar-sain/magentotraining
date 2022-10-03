<?php
/**
 * Created by PhpStorm.
 * User: sigma
 * Date: 7/9/22
 * Time: 12:20 PM
 */

namespace SimplifiedMagento\Database\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{

    /**
     * Upgrades data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
       $setup->startSetup();

        if(version_compare($context->getVersion(), '1.0.3', '<'))
        {
            $setup->getConnection()->insert(
                $setup->getTable('affiliate member'),
                [
                    'name'=>'Shivam Parihar',
                    'status'=>true,
                    'address'=>'90, sector-c, kalindi gold city, Indore (M.P)',
                    'phone_number'=>'6261122929',

                ]
            );  
        }
        
        $setup->endSetup();
    }
}