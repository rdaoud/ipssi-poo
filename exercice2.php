<?php

namespace Ipssi\Evaluation;
require_once('vendor/autoload.php');


$document = [ 
new Document(new Texte(50, 10, new Couleur(0, 0, 0)), new Couleur(0, 0, 0), 9, 23),
new Document(new Image(30, 10, new Couleur(10, 10, 10)), new Couleur(20, 20, 20), 30, 10),
new Document(new Nuage(50, 10, new Couleur(20, 10, 10)), new Couleur(20, 30, 20), 30, 10),
new Document(new Etoile(70, 10, new Couleur(10, 10, 30)), new Couleur(30, 20, 60), 30, 10),

];

$i = 1;

foreach ($document as $doc) {
    echo "Document " . $i;
    echo PHP_EOL;
    echo PHP_EOL;
    echo $doc->toString();
    echo PHP_EOL;
    echo "=====================";
    echo PHP_EOL;
    $i++;
}

?>