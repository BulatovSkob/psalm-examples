<?php

namespace Helpers;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Model\Product;

interface LessSpecificReturnStatementInterface
{
    /** @return Product */
    public function foo(ProductInterface $product);
}
