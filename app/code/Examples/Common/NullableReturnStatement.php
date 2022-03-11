<?php declare(strict_types=1);

namespace Examples\Common;

class NullableReturnStatement
{
    public function foo(): bool
    {
        return $this->bar();
    }

    private function bar(): ?bool
    {
        return rand(0,1) ? true : null;
    }

}
