<?php

namespace Magetop\Helloworld\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('magetop_blog');
        //Check for the existence of the table
        if ($setup->getConnection()->isTableExists($tableName) == true) {
            $data = [
                [
                    'title' => 'How to Speed Up Magento 2 Website',
                    'banner' => 'Speeding up your Magento 2 website is very important, it affects user experience. Customers will feel satisfied when your site responds quickly',
                    'start' => date('Y-m-d H:i:s'),
                    'end' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Optimize SEO for Magento Website',
                    'banner' => 'One of the important reasons why many people choose Magento 2 for their website is the ability to create SEO friendly',
                    'start' => date('Y-m-d H:i:s'),
                    'end' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Top 10 eCommerce Websites',
                    'banner' => 'These are the websites of famous e-commerce corporations in the world. With very large revenue contributing to the world economy',
                    'start' => date('Y-m-d H:i:s'),
                    'end' => date('Y-m-d H:i:s'),
                ],
            ];
            foreach ($data as $item) {
                //Insert data
                $setup->getConnection()->insert($tableName, $item);
            }
        }
        $setup->endSetup();
    }
}