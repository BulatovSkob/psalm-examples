<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

/**
 * @psalm-suppress MixedArgument, MixedAssignment
 */
class MixedMethodCall
{
    /**
     * @param MixedMethodCall[] $withDoc
     * @param array<mixed> $withoutDoc
     */
    public function bar(array $withDoc, array $withoutDoc): void
    {
        foreach ($withDoc as $item) {
            echo $item->foo();
        }

        foreach ($withoutDoc as $item) {
            echo $item->foo();
        }
    }

    public function foo(): string
    {
        return 'hello';
    }
}
