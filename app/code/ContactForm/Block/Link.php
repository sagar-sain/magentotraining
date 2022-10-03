<?php

namespace MyContactForm\ContactForm\Block;

use Magento\Customer\Model\Session;

class Link extends \Magento\Framework\View\Element\Html\Link
{
    /**
     * Render block HTML.
     *
     * @return string
     */
    protected function _toHtml()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customerSession = $objectManager->get(\Magento\Customer\Model\Session::class);
        if ($customerSession->isLoggedIn()) {
            // customer login action
            if (false != $this->getTemplate()) {
                return parent::_toHtml();
            } else {
                return '<li><a ' . $this->getLinkAttributes() . ' >' . $this->escapeHtml($this->getLabel()) . '</a></li>
                ';
            }
        }
    }
}