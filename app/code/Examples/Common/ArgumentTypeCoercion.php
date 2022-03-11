<?php declare(strict_types=1);

namespace Examples\Common;

use Magento\Framework\Exception\CouldNotDeleteException;
use Throwable;

class ArgumentTypeCoercion
{
    /**
     * @throws CouldNotDeleteException
     */
    function foo(): void
    {
        try {
            $this->bar();
        } catch (Throwable $throwable) {
            throw new CouldNotDeleteException(__($throwable->getMessage()), $throwable);
        }
    }

    private function bar(): void
    {
    }
}
