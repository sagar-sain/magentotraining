<?php

namespace SimplifiedMagento\Database\Setup;

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
        if(version_compare($context->getVersion(), '1.0.2', '<'))
        {
            $setup->getConnection()->addColumn(
                $setup->getTable('affiliate member'),
                'phone_number',
                [
                    'nullable'=>false,
                    'type'=>Table::TYPE_TEXT,
                    'comment'=> 'Phone Number Of  Member'
                ]
            );
        }

        $setup->endSetup();
    }
}