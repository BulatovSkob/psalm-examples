<?php declare(strict_types=1);

namespace Examples\Common;

use Helpers\CompanyManagementInterface;

class DocblockTypeContradiction
{
    public function foo(CompanyManagementInterface $companyManagement): int
    {
        $company = $companyManagement->getByCustomerId(123);
        if(!$company) {
            return 0;
        }

        return 1;
    }
}
