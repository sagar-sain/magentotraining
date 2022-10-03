<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 6/9/22
 * Time: 11:15 AM
 */
namespace Formodule\Module\Setup;

use  Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
class InstallSchema implements InstallSchemaInterface
{

    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $tableName=$setup->getTable('New_Magento');

        $table=$setup->getConnection()
            ->newTable($tableName)
            ->addColumn(
                'id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'unsigned' => true,
                    'nullable' => false,
                    'primary' => true
                ],
                'ID'
            )
            ->addColumn(
                'title',
                Table::TYPE_TEXT,
                null,
                ['nullable' => false, 'default' => ''],
                'Title'
            )
            ->addColumn(
                'description',
                Table::TYPE_TEXT,
                null,
                ['nullable' => false, 'default' => ''],
                'Description'
            )
            ->addColumn(
                'created_at',
                Table::TYPE_DATETIME,
                null,
                ['nullable' => false],
                'Created At'
            )
            ->addColumn(
                'status',
                Table::TYPE_SMALLINT,
                null,
                ['nullable' => false, 'default' => '0'],
                'Status'
            );
        $setup->getConnection()->createTable($table);


        $setup->endSetup();
    }
}