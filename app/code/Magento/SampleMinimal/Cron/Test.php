<?php

namespace Magento\SampleMinimal\Cron;

use Magento\Catalog\Model\ProductRepository;
class Test
{
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function execute()
    {
        $addname=$this->productRepository->getById(1);
        $addname->setName("ON SALE..".$addname->getName());
        $this->productRepository->save($addname);
    }
}