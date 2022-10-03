<?php

namespace Formodule\Module\Controller\Index;

use \Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Submit extends Action
{
    /* @var $this ->Magento\Framework\Controller\ResultFactory */
    protected $_resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customerSession = $objectManager->get('Magento\Customer\Model\Session');
        if ($customerSession->isLoggedIn()) {
            return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        } else {
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('');
            return $resultRedirect;
        }
    }
}
