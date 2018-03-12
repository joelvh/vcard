<?php

namespace JeroenDesloovere\VCard\Formatter\Property;

use JeroenDesloovere\VCard\Property\Name;

final class NameFormatter extends NodeFormatter implements NodeFormatterInterface
{
    /** @var Name */
    protected $name;

    public function __construct(Name $name)
    {
        $this->name = $name;
    }

    public function getVcfString(): string
    {
        return $this->name->getNode() . ':' . $this->escape(
            $this->name->getFirstName() . ';' . $this->name->getAdditional() . ';' . $this->name->getLastName() . ';' . $this->name->getPrefix() . ';' . $this->name->getSuffix()
        );
    }
}
