<?php declare(strict_types=1);

namespace Examples\Common;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/** @psalm-suppress PropertyNotSetInConstructor */
class PossiblyFalseReference extends AbstractDb
{
    protected function _construct()
    {
        $this->getSelfOrFalse()->foo();
    }

    /** @return self|false */
    private function getSelfOrFalse()
    {
        return rand(0,1) ? $this : false;
    }

    public function foo(): void
    {
    }
}
