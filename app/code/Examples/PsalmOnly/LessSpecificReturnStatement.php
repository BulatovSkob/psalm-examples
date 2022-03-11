<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

use Helpers\LessSpecificReturnStatementInterface;
use Magento\Catalog\Api\Data\ProductInterface;

class LessSpecificReturnStatement implements LessSpecificReturnStatementInterface
{
    /**
     * @return ProductInterface
     */
    public function foo(ProductInterface $product)
    {
        return $product;
    }
}
