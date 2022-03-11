<?php declare(strict_types=1);

namespace Examples\Common;

/**
 * @method void foo();
 *
 * phpstan find only undefined method
 */

class UndefinedMagicMethod
{
    /**
     * @param string $name
     * @param string[] $args
     */
    public function __call(string $name, array $args): void
    {
        $this->foo();
        $this->bar();
    }
}
