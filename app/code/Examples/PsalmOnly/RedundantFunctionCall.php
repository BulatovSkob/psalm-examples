<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

class RedundantFunctionCall
{
    /**
     * @return int[]
     */
    public function foo(): array
    {
        $list = [1,2,3,4];

        return array_values($list);
    }
}
