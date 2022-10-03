<?php
/**
 * Created by PhpStorm.
 * User: sigma
 * Date: 8/9/22
 * Time: 2:40 PM
 */

namespace SimplifiedMagento\Database\Api\Data;


interface AffiliateMemberInterface
{
    const NAME = "name";
    const ID = "id";
    const STATUS = "status";
    const ADDRESS = "address";
    const CREATED_AT = "created_at";
    const UPDATED_AT = "updated_at";
    const PHONE_NUMBER = "phone_number";
    /**
     * @return Integer
     */

    public function getId();

    /**
     * @return string
     */

    public function getName();

    /**
     * @return boolean
     */

    public function getStatus();

    /**
     * @return string
     */
    public function getAddress();

    /**
     * @return string
     */

    public function getPhoneNumber();

    /**
     * @return string
     */

    public function getCreatedAt();

    /**
     * @return string
     */

    public function getUpdatedAt();

    /**
     * @param int $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */

    public function setId($id);

    /**
     * @param string $name
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */

    public function setName($name);

    /**
     * @param boolean $status
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */

    public function setStatus($status);

    /**
     * @param \string $address
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */

    public function setAddress($address);

    /**
     * @param string $phoneNumber
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */

    public function setPhoneNumber($phoneNumber);
}