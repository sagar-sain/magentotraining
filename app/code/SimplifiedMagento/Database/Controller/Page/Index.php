<?php

namespace SimplifiedMagento\Database\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember;

class Index extends Action
{
    protected $affiliateMemberFactory;

    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        parent::__construct($context);
    }

    public function execute()
    {
       $affiliateMember = $this->affiliateMemberFactory->create();

        $collection = $affiliateMember->getCollection()->
        addFieldToSelect(['name', 'status', 'address'])
        ->addFieldToFilter('status',array('neq'=>false));

        foreach ($collection as $item)
        {
            print_r($item->getData());
            echo '</br>';
        }
//        $member = $affiliateMember->load(4);
//        $member->setAddress('new address');
//        $member->setName('Tinku');
//        $member->delete();
//        var_dump($member->getData());

//        $affiliateMember->addData(['name'=>'Rashi', 'address'=>'Jodhpur, Rajasthan', 'status'=>true,
//            'phone_number'=>'9981828681' ]);
//        $affiliateMember->save();
    }
}