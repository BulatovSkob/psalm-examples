<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

use Magento\Catalog\Api\Data\CategoryInterface;

class PossiblyNullOperand
{
    public function foo(CategoryInterface $category): string
    {
        return 'hello - ' . $category->getName();
    }
}
