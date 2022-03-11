<?php declare(strict_types=1);

namespace Examples\Common;

class InvalidOperand
{
    public function foo(bool $status, bool $mask): void
    {
        $status &= $mask;
        echo $status;
    }
}
