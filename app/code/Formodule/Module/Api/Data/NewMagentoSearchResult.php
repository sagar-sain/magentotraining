<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 13/9/22
 * Time: 11:57 AM
 */

namespace Formodule\Module\Api\Data;


use Magento\Framework\Api\SearchResultsInterface;

interface NewMagentoSearchResult extends SearchResultsInterface
{
    /**
     * @return \Magento\Framework\Api\ExtensibleDataInterface[]
     */
    public function getItems();

    /**
     * @param array $items
     * @return SearchResultsInterface
     */
    public function setItems(array $items);
}