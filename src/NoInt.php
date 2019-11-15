<?php

namespace Ipssi\Evaluation;

class NoInt extends IpssiPooException
{

    /** @var string */
    private $property;

  

    public function __construct(string $property)
    {
        $this->property = $property;

        $this->message = "Vous n'avez pas rentré de " . $this->property;
    }

    public function getProperty(): string
    {
        return $this->property;
    }

 
}
