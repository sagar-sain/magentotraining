<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 8/9/22
 * Time: 5:34 PM
 */

namespace Formodule\Module\Api\Data;


interface NewMagentoInterface
{
    const Id='id';
    const Title='title';
    const Description='descripton';
    const Status='status';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param $title
     * @return string
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param $Description
     * @return string
     */
    public function setDescription($Description);

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @param $status
     * @return string
     */
    public function setStatus($status);

}