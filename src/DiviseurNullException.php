<?php

namespace Ipssi\Evaluation;

use Ipssi\Evaluation\Diviseur;

class DiviseurNullException extends InvalidDiviseurNullException
{
    public function __construct(string $index)
    {
        parent::__construct('0');
    }
}

?>