<?php declare(strict_types=1);

namespace Examples\Common;

use Zend_Db_Expr;

class InvalidScalarArgument
{
    const SOME_CONST = 1;

    public function foo(): string
    {
        return (string) new Zend_Db_Expr(self::SOME_CONST);
    }
}
