<?php

require_once('vendor/autoload.php');
use Ipssi\Evaluation\IndexGrandException;
use Ipssi\Evaluation\IndexInferieurException;
use Ipssi\Evaluation\DiviseurNullException;
use Ipssi\Evaluation\IndexVide;
use Ipssi\Evaluation\NoIntException;



$climate = new League\CLImate\CLImate;



class Diviseur {
    public function division($index,  $diviseur)
    {
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];
        $max = sizeof($valeurs);
        if($index > $max){
            throw new IndexGrandException($index);
        }
        if($index < 0){
            throw new IndexInferieurException($index);
        }
        if ($diviseur == '0'){
            throw new DiviseurNullException($diviseur);
        }
        if(empty($index)){
            throw new IndexVide($diviseur);
        }
        if(!is_numeric($index) || !is_numeric($diviseur) || !is_integer($index/1)){
            throw new NoIntException($diviseur);
        }
        else{
        return $valeurs[$index] / $diviseur;
        }
    }
}
    

    $recommencer = true;

while($recommencer){
    $input = $climate->input("Entrez l’indice de l’entier à diviser : ");
    $index = $input->prompt();
    $input = $climate->input("Entrez le diviseur : ");
    $diviseur = $input->prompt();
    try{
    $climate->output("Le résultat de la division est : " . (new Diviseur())->division($index, $diviseur));
    $recommencer = false;
    }
    catch(IndexGrandException $e){
        echo "Erreur : " . $e->getMessage();
        echo PHP_EOL;
    }
    catch(IndexInferieurException $e){
        echo "Erreur : " . $e->getMessage();
        echo PHP_EOL;
    }
    catch(DiviseurNullException $e){
        echo "Erreur : " . $e->getMessage();
        echo PHP_EOL;
    }
    catch(IndexVide $e){
        echo "Erreur : " . $e->getMessage();
        echo PHP_EOL;
    }
    catch(NoIntException $e){
        echo "Erreur : " . $e->getMessage();
        echo PHP_EOL;
    }
}
