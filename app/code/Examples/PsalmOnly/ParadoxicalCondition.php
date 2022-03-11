<?php declare(strict_types=1);

namespace Examples\PsalmOnly;

class ParadoxicalCondition
{
    /**
     * @param string[] $content
     */
    public function foo(array $content): void
    {
        if(!$content || empty($content)) {
            echo 'redundant condition';
        }
    }
}
