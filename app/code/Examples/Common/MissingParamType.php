<?php declare(strict_types=1);

namespace Examples\Common;

class MissingParamType
{
    public function bar($array): int
    {
        return (int)$array;
    }
}
