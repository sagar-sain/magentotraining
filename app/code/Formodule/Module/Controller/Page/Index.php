<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 7/9/22
 * Time: 12:32 PM
 */
namespace Formodule\Module\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Backend\App\Action\Context;
use Formodule\Module\Model\NewMagentoFactory;

class Index extends Action
{
    protected $NewMagentoFactory;
    public function __construct(Context $context,NewMagentoFactory $newMagentoFactory)
    {
        $this->NewMagentoFactory=$newMagentoFactory;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|\Magento\Framework\App\ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $new=$this->NewMagentoFactory->create();
//        $member=$new->load(2);
//        $member->setTitle("set from model");
//        $member->save();

//        $new->addData(['title'=>'added from controller','description'=>'Hi controller']);
//        $new->save();
//        var_dump($new->getData());

//        $member=$new->load(2);
//        $member->delete();
//        $member->save();

//        $collection=$new->getCollection()
//        ->addFieldToSelect(["id","title","description"])
//        ->addFilter("id",array('eq'=>2));
//
//        foreach ($collection as $item){
//
//            print_r($item->getData());
//            echo "</br>";
//        }

        


    }
}