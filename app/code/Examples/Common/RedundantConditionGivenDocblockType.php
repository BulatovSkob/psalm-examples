<?php declare(strict_types=1);

namespace Examples\Common;


class RedundantConditionGivenDocblockType
{
    public function __construct()
    {
        /** @var self $foo */
        $foo = $this->foo();

        if($foo) {
            echo 'Hello world';
        }
    }

    /** @return self|bool */
    private function foo()
    {
        return rand(0,1) ? $this : true;
    }
}
