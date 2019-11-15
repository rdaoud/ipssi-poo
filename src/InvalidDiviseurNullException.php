<?php

namespace Ipssi\Evaluation;

class InvalidDiviseurNullException extends IpssiPooException
{

    /** @var string */
    private $property;

  

    public function __construct(string $property)
    {
        $this->property = $property;

        $this->message = "Impossible de diviser par " . $this->property;
    }

    public function getProperty(): string
    {
        return $this->property;
    }

 
}
