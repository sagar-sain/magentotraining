<?php
/**
 * Created by PhpStorm.
 * User: sigma
 * Date: 15/9/22
 * Time: 12:21 PM
 */

namespace SimplifiedMagento\Database\Model;
use SimplifiedMagento\Database\Api\AffiliateMemberRepositoryInterface;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember\CollectionFactory;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{
    private $collectionFactory;
    private $affiliateMemberFactory;

    public function __construct(CollectionFactory $collectionFactory, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->collectionFactory = $collectionFactory;
        $this->affiliateMemberFactory = $affiliateMemberFactory;
    }

    /**
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }


    /**
     * @param int $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface  {Returning a single affiliate member from DB}
     */
    public function getAffiliateMember($id)
    {
        $member = $this->affiliateMemberFactory->create();
        return $member->load($id);
    }
}