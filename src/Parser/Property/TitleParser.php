<?php

namespace JeroenDesloovere\VCard\Parser\Property;

use JeroenDesloovere\VCard\Property\Title;
use JeroenDesloovere\VCard\Property\NodeInterface;

final class TitleParser implements NodeParserInterface
{
    public function parseLine(string $value, array $parameters = []): NodeInterface
    {
        return new Title($value);
    }
}