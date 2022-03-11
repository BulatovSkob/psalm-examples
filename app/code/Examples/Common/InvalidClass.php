<?php declare(strict_types=1);

namespace Examples\Common;

class InvalidClass
{
    public function foo(\Magento\Framework\Db\Adapter\AdapterInterface $adapter): \Magento\Framework\Db\Adapter\AdapterInterface
    {
        return $adapter;
    }
}
