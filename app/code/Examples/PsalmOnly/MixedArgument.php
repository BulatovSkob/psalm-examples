<?php declare(strict_types=1);

namespace Examples\PsalmOnly;


class MixedArgument
{
    public function foo() : string
    {
        return $this->bar($this->getMixed());
    }

    private function bar(string $param): string
    {
        return $param;
    }

    /** @return mixed */
    private function getMixed()
    {
        return rand(0,1) ? new self : 'string';
    }
}
