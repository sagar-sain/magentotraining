<?php

namespace SimplifiedMagento\Database\Api;

interface AffiliateMemberRepositoryInterface
{
    /**
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface[]  {Returning array from DB}
     */
    public function getList();

    /**
     * @param int $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface  {Returning a single affiliate member from DB}
     */

    public function getAffiliateMember($id);

}