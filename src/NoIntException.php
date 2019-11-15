<?php

namespace Ipssi\Evaluation;

use Ipssi\Evaluation\Diviseur;

class NoIntException extends NoInt
{
    public function __construct(string $index)
    {
        parent::__construct('chiffre');
    }
}

?>