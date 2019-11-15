<?php

namespace Ipssi\Evaluation;

class InvalidGIException extends IpssiPooException
{
  

    /** @var string */
    private $property;

   

    public function __construct(string $property)
    {
        $this->property = $property;

        $this->message = "Vous avez un " . $this->property . " trop grand !";
    }

    public function getProperty(): string
    {
        return $this->property;
    }

 
}
