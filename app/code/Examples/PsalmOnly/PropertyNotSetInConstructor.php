<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

class PropertyNotSetInConstructor
{
    private int $property;

    public function __construct()
    {
    }

    public function setProperty(int $property): void
    {
        $this->property = $property;
    }

    public function getProperty(): int
    {
        return $this->property;
    }
}
