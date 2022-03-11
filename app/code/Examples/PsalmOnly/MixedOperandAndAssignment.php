<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

class MixedOperandAndAssignment
{
    public function foo(): void
    {
        foreach($this->getArray() as $element)
        {
            echo 'string' . $element;
        }
    }

    /**
     * @return array<mixed>
     */
    private function getArray(): array
    {
        return range(0,10);
    }
}
