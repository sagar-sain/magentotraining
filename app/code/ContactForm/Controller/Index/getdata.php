<?php

namespace MyContactForm\ContactForm\Controller\Index;

use \Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use MyContactForm\ContactForm\Model\DataExampleFactory;

class getdata extends Action
{
    protected $_resultPageFactory;
    protected $_dataExample;
    protected $resultRedirect;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \MyContactForm\ContactForm\Model\DataExampleFactory  $dataExample,
        \Magento\Framework\Controller\ResultFactory $result
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->_dataExample = $dataExample;
        $this->resultRedirect = $result;
        parent::__construct($context);
    }

    public function execute()
    {
        $PostValue = $this->getRequest()->getPost();
//        echo "<pre>";
//        print_r($PostValue);
//        print_r($PostValue['name']);
//        die("stop");
//        return $this->_resultPageFactory->create();

        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        $model = $this->_dataExample->create();
        $model->addData([
            "Phone" => $PostValue['number'],
            "Email" => $PostValue['email'],
            "Message" => $PostValue['message'],
            "status" => false,
            "sort_order" => 1
        ]);
        $saveData = $model->save();
        if($saveData){
            $this->messageManager->addSuccess( __('Insert Record Successfully !') );
        }
        return $resultRedirect;
    }
}