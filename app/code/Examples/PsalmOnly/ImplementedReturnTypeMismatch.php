<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

use Magento\Checkout\Api\AgreementsValidatorInterface;

class ImplementedReturnTypeMismatch implements AgreementsValidatorInterface
{

    /**
     * @param array<mixed> $agreementIds
     * @return int|bool
     */
    public function isValid($agreementIds = [])
    {
        return rand(0,1) ? 1 : false;
    }
}
