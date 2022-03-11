<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

use Zend_Filter_Interface;

class ParamNameMismatch implements Zend_Filter_Interface
{
    public function filter($id)
    {
        return $id;
    }
}
