<?php declare(strict_types=1);

namespace Examples\Common;

class UnnecessaryVarAnnotation
{
    public function foo(): string
    {
        /** @var string  $string */
        $string = $this->bar();

        return $string . 'string';
    }

    private function bar(): string
    {
        return 'string';
    }
}
