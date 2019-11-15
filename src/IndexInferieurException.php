<?php

namespace Ipssi\Evaluation;

use Ipssi\Evaluation\Diviseur;

class IndexInferieurException extends InvalidPIException
{
    public function __construct(string $index)
    {
        parent::__construct('index');
    }
}

?>