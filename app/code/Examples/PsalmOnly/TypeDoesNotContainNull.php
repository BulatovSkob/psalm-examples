<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

class TypeDoesNotContainNull
{
    /**
     * also Throws RedundantCondition error
     * @param array<string, string> $array
     */
    public function foo(array $array): ?float
    {
        return (float)$array['key'] ?? null;
    }
}
