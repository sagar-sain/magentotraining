<?php
namespace MyContactForm\ContactForm\Setup;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface{

    public function install(SchemaSetupInterface $setup,ModuleContextInterface $context){
        $setup->startSetup();

        $conn = $setup->getConnection();
        $tableName = $setup->getTable('sagar');

        if($conn->isTableExists($tableName) != true){
            $table = $conn->newTable($tableName)
                ->addColumn(
                    'Id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity'=>true,'unsigned'=>true,'nullable'=>false,'primary'=>true]
                )
                ->addColumn(
                    'Message',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable'=>false,'default'=>'']
                )
                ->addColumn(
                    'Email',
                    Table::TYPE_TEXT,
                    '2M',
                    ['nullbale'=>false,'default'=>'']
                )
                ->addColumn(
                    'Phone',
                    Table::TYPE_TEXT,
                    '2M',
                    ['nullbale'=>false,'default'=>'']
                )


                ->setOption('charset','utf8');
            $conn->createTable($table);
        }
        else
        {
            die("stop");
        }
        $setup->endSetup();
    }
}
?>