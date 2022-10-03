<?php

namespace SimplifiedMagento\Database\Model;
use  Magento\Framework\Model\AbstractModel;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface;

class AffiliateMember extends AbstractModel implements AffiliateMemberInterface
{
    protected function _construct()
    {
        $this->_init(AffiliateMemberResource::class);
    }

    public function getId()
    {
        return $this->getData(AffiliateMemberInterface::ID);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(AffiliateMemberInterface::NAME);
    }

    /**
     * @return boolean
     */
    public function getStatus()
    {
        return $this->getData(AffiliateMemberInterface::STATUS);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->getData(AffiliateMemberInterface::ADDRESS);
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getData(AffiliateMemberInterface::PHONE_NUMBER);
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(AffiliateMemberInterface::CREATED_AT);
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(AffiliateMemberInterface::UPDATED_AT);
    }

    /**
     * @param string $name
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setName($name)
    {
        $this->setData(AffiliateMemberInterface::NAME, $name);
    }

    /**
     * @param boolean $status
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setStatus($status)
    {
        $this->setData(AffiliateMemberInterface::STATUS, $status);
    }

    /**
     * @param \string $address
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAddress($address)
    {
        $this->setData(AffiliateMemberInterface::ADDRESS, $address);
    }

    /**
     * @param string $phoneNumber
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->setData(AffiliateMemberInterface::PHONE_NUMBER, $phoneNumber);
    }
}