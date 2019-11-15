<?php

namespace Ipssi\Evaluation;

class InvalidPIException extends IpssiPooException
{

    /** @var string */
    private $property;

  

    public function __construct(string $property)
    {
        $this->property = $property;

        $this->message =  $this->property . " ne peut pas être inférieur à 0 !";
    }

    public function getProperty(): string
    {
        return $this->property;
    }

 
}
