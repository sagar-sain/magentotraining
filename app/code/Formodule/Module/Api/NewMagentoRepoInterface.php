<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 9/9/22
 * Time: 9:59 AM
 */

namespace Formodule\Module\Api;


use Magento\Framework\Api\SearchCriteriaInterface;

interface NewMagentoRepoInterface
{
    /**
     * @return Formodule\Module\Api\Data\NewMagentoInterface[]
     */
    public function getList();

    /**
     * @param int $id
     * @return Formodule\Module\Api\Data\NewMagentoInterface
     */
    public function getElementById($id);

    /**
     * @param Formodule\Module\Api\Data\NewMagentoInterface $member
     * @return Formodule\Module\Api\Data\NewMagentoInterface
     */
    public function saveElement(\Formodule\Module\Api\Data\NewMagentoInterface $member);

    /**
     * @param int $id
     * @return void
     */
    public function deleteById($id);

    /**
     * @param SearchCriteriaInterface $searchcriteria
     * @return \Formodule\Module\Api\Data\NewMagentoSearchResult
     */
    public function getSearchResultsList(SearchCriteriaInterface $searchcriteria);

}