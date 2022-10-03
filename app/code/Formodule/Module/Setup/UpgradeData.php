<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 7/9/22
 * Time: 11:42 AM
 */

namespace Formodule\Module\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\DB\Ddl\Table;

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

        if(version_compare($context->getVersion(),'0.0.3','<')){
            $setup->getConnection()->insert(
                $setup->getTable("New_Magento"),
                ['title'=>'Hi UpgradeData','description'=>'Hi added by UpgradeData']
            );
        }

        $setup->endSetup();

    }
}