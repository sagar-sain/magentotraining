<?php
namespace MyContactForm\ContactForm\Model\ResourceModel\DataExample;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
    public function _construct(){
        $this->_init("MyContactForm\ContactForm\Model\DataExample",
                     "MyContactForm\ContactForm\Model\ResourceModel\DataExample");
    }
}
?>