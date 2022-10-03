<?php

namespace DI\Dependency\Controller\Page;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use DI\Dependency\NotMagento\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class HelloWorld extends Action
{

    protected $pencilInterface;
    protected $productRepository;

    public function __construct(Context $context, PencilInterface $pencilInterface, ProductRepositoryInterface $productRepository) {

        $this->pencilInterface = $pencilInterface;
        $this->productRepository = $productRepository;

        parent::__construct($context);
    }

    public function execute()
    {
//        echo $this->pencilInterface->getPencilType();
          echo get_class($this->productRepository);
    }
}
