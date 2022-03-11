<?php declare(strict_types=1);

namespace Examples\Common;

class PossiblyFalseOperand
{
    public function foo(): int
    {
        $position = array_search(1, [rand(0,1)]);

        return $position + 1;
    }
}
