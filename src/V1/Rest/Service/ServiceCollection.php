<?php
namespace ApigilityO2oServiceTrade\V1\Rest\Service;

use Zend\Paginator\Paginator;
use Zend\Stdlib\ArrayObject as ZendArrayObject;

class ServiceCollection extends Paginator
{
    public function getCurrentItems()
    {
        $set = parent::getCurrentItems();
        $collection = new ZendArrayObject();

        foreach ($set as $item) {
            $collection->append(new ServiceEntity($item));
        }
        return $collection;
    }
}
