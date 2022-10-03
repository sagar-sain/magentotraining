<?php
namespace MyContactForm\ContactForm\Model\ResourceModel;
class DataExample extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
    public function _construct(){
        $this->_init("sagar","Id");
    }
}
?>