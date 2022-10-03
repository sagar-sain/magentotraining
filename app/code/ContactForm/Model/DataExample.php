<?php
namespace MyContactForm\ContactForm\Model;
class DataExample extends \Magento\Framework\Model\AbstractModel{
    public function _construct(){
        $this->_init("MyContactForm\ContactForm\Model\ResourceModel\DataExample");
    }
}
?>