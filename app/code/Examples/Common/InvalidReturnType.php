<?php declare(strict_types=1);

namespace Examples\Common;

use Magento\Framework\Setup\Patch\DataPatchInterface;

class InvalidReturnType implements DataPatchInterface
{

    public static function getDependencies(): array
    {
        return [];
    }

    public function getAliases(): array
    {
        return [];
    }

    public function apply()
    {
        // TODO: Implement apply() method.
    }
}
