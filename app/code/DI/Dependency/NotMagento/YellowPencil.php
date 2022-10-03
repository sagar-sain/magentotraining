<?php
/**
 * Created by PhpStorm.
 * User: sigma
 * Date: 23/8/22
 * Time: 12:36 PM
 */

namespace DI\Dependency\NotMagento;


class YellowPencil implements PencilInterface
{
    public function getPencilType()
    {
        // TODO: Implement getPencilType() method.
        return "Yellow pencil";
    }
}