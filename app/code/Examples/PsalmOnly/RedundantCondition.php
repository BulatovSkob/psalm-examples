<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

class RedundantCondition
{
    /**
     * also throws RedundantConditionGivenDocblockType
     * @return string[]
     */
    public function foo(string $encodedValue): array
    {
        $decodedValue = \explode(',', $encodedValue);

        return \array_filter($decodedValue, function ($item) {
            return \is_string($item) && $item !== '';
        });

    }
}
