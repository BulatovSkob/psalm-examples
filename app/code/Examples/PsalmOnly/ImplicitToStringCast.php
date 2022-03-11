<?php

namespace Examples\PsalmOnly;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Phrase;
use Psr\Log\LoggerInterface;

class ImplicitToStringCast
{
    private LoggerInterface $logger;
    private Phrase $phrase;

    public function __construct(LoggerInterface $logger, Phrase $phrase)
    {
        $this->logger = $logger;
        $this->phrase = $phrase;
    }
    protected function implicitCast(): void
    {
        try {
            throw new LocalizedException($this->phrase);
        } catch (LocalizedException $e) {
            $this->logger->critical($e);
        }
    }
}
