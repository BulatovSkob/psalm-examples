<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

use GuzzleHttp\Client;

class PossiblyNullPropertyAssignmentValue
{
    /**
     * @var Client
     */
    private $apiClient = null;

    public function getClient(): Client
    {
        return $this->apiClient;
    }
}
