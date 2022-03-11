<?php declare(strict_types=1);

namespace Examples\Common;

use Exception;

class PossiblyNullReference
{
    public function getErrorNoticeMessage(?Exception $error = null): string
    {
        return $error->getMessage();
    }
}
