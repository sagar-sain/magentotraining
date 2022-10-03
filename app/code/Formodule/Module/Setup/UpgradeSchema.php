<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 6/9/22
 * Time: 4:26 PM
 */

namespace Formodule\Module\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{

    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(),'0.0.2','<')){
            $setup->getConnection()->addColumn(

                $setup->getTable("New_Magento"),
                'NewColoumn',
                ['nullable'=>true,'type'=>Table::TYPE_TEXT,'comment'=>'New coloumn comment']
            );
        }

        $setup ->endSetup();
    }
}