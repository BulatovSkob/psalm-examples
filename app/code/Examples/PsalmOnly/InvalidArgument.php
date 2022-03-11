<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/** @psalm-suppress PropertyNotSetInConstructor */
class InvalidArgument extends AbstractDb
{
    protected function _construct()
    {
        $this->foo();
    }

    public function foo(): void
    {
        /** @var AdapterInterface $connection */
        $connection = $this->getConnection();
        $query = $connection->select();
        $query->joinInner(
            [
                'cpw' => 'catalog_product_website',
            ],
            'cpw.website_id=s.website_id and cpe.entity_id=cpw.product_id',
            false
        );
    }
}
