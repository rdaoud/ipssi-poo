<?php

namespace Ipssi\Evaluation;

use Ipssi\Evaluation\Diviseur;

class IndexGrandException extends InvalidGIException
{
    public function __construct(string $index)
    {
        parent::__construct('index');
    }
}

?>