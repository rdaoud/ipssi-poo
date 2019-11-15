<?php

namespace Ipssi\Evaluation;

use Ipssi\Evaluation\Diviseur;

class IndexVide extends InvalidIndex
{
    public function __construct(string $index)
    {
        parent::__construct('index');
    }
}

?>