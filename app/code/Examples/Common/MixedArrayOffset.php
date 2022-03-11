<?php declare(strict_types=1);

namespace Examples\Common;

/** @psalm-suppress  MixedAssignment */
class MixedArrayOffset
{
    function bar(array $keys): int
    {
        $array = [1,2,3];

        foreach ($keys as $key) {
            return $array[$key];
        }

        return 1;
    }

    /**
     * @param int[] $keys
     * @return int
     */
    function foo(array $keys): int
    {
        $array = [1,2,3];

        foreach ($keys as $key) {
            return $array[$key];
        }

        return 1;
    }

    /**
     * @param array<int, int> $keys
     * @return int
     */
    function fooBar(array $keys): int
    {
        $array = [1,2,3];

        foreach ($keys as $key) {
            return $array[$key];
        }

        return 1;
    }
}
