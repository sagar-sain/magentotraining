<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 9/9/22
 * Time: 10:02 AM
 */

namespace Formodule\Module\Model;

use Formodule\Module\Api\NewMagentoRepoInterface;
use Formodule\Module\Model\ResourceModel\NewMagento\CollectionFactory;
use Formodule\Module\Model\NewMagentoFactory;
use Formodule\Module\Model\ResourceModel\NewMagento;
use Magento\Framework\Api\SearchCriteriaInterface;
use Formodule\Module\Api\Data\NewMagentoSearchResultFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;

class NewMagentoRepo implements NewMagentoRepoInterface
{
    protected $NewMagento;
    protected $collectionFactory;
    protected $NewMagentoFactory;
    protected $NewMagentoSearchResultFactory;
    protected $CollectionProcessor;

    public function __construct(CollectionFactory $collectionFactory, NewMagentoFactory $NewMagentoFactory,
                                NewMagento $NewMagento,NewMagentoSearchResultFactory $NewMagentoSearchResultFactory,
                                CollectionProcessor $CollectionProcessor)
    {
        $this->CollectionProcessor=$CollectionProcessor;
        $this->NewMagentoSearchResultFactory=$NewMagentoSearchResultFactory;
        $this->NewMagento = $NewMagento;
        $this->collectionFactory = $collectionFactory;
        $this->NewMagentoFactory = $NewMagentoFactory;
    }

    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }

    /**
     * @param int $id
     * @return Formodule\Module\Api\Data\NewMagentoInterface
     */
    public function getElementById($id)
    {
        return $this->NewMagentoFactory->create()->load($id);
    }

    /**
     * @param \Formodule\Module\Api\Data\NewMagentoInterface $member
     * @return \Formodule\Module\Api\Data\NewMagentoInterface
     */
    public function saveElement(\Formodule\Module\Api\Data\NewMagentoInterface $member)
    {
        if ($member->getId() == null) {
            $this->NewMagento->save($member);
            return $member;
        } else {
            $newMenber = $this->NewMagentoFactory->create()->load($member->getId());

            foreach ($member->getData() as $key => $value) {
                $newMenber->setData($key, $value);
            }
            $this->NewMagento->save($newMenber);
            return $newMenber;
        }
    }

    /**
     * @param int $id
     * @return void
     */
    public function deleteById($id)
    {
        $element = $this->NewMagentoFactory->create()->load($id);
        $element->delete();

    }

    /**
     * @param SearchCriteriaInterface $searchcriteria
     * @return \Formodule\Module\Api\Data\NewMagentoSearchResult
     */
    public function getSearchResultsList(SearchCriteriaInterface $searchcriteria)
    {
        $collection=$this->NewMagentoFactory->create()->getCollection();
        $this->CollectionProcessor->process($searchcriteria ,$collection);
        $serchresults=$this->NewMagentoSearchResultFactory->create();
        $serchresults->setSearchCriteria($searchcriteria);
        $serchresults->setItems($collection->getData());
        $serchresults->setTotalCount($collection->getSize());
        return $serchresults;
    }
}