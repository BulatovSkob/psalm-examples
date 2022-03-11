<?php declare(strict_types=1);

namespace Examples\Common;

class MissingReturnType
{
    public function foo()
    {
        return rand(0,1) ? 'string' : [];
    }

    /**
     * @return array<int, string>|string
     */
    public function bar()
    {
        return rand(0,1) ? 'string2' : [];
    }
}
