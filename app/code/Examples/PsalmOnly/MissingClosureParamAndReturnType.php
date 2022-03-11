<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

use Closure;

class MissingClosureParamAndReturnType
{

    public function foo(): Closure
    {
        return fn ($string) => $string;
    }
}
