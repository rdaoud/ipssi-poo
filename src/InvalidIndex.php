<?php

namespace Ipssi\Evaluation;

class InvalidIndex extends IpssiPooException
{

    /** @var string */
    private $property;

  

    public function __construct(string $property)
    {
        $this->property = $property;

        $this->message = $this->property . " est vide";
    }

    public function getProperty(): string
    {
        return $this->property;
    }

 
}
