<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

use Magento\Framework\Filter\Translit;

/** @psalm-suppress ParamNameMismatch */
class MoreSpecificImplementedParamType extends Translit
{
    /**
     * Filter value
     *
     * @param string $string
     * @return string
     */
    public function filter($string)
    {
        return $string;
    }
}
