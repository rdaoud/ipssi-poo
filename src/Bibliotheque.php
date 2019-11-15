<?php

namespace Ipssi\Evaluation;

class Bibliotheque{
    
    private $livres;

    public function __construct(array $livres){
        $this->livres = $livres;
    }
    
    public function preterSiPossible(string $nom){
        //$livreDispo = false;
        //$dispo = null;
        foreach ($this->livres as $livre){
            if ($livre->getNom() === $nom && $livre->getExemplaire() > 0){
               /* if ($salle->getClient() != null){
                    echo "Impossible de réserver car la chambre est prise";
                    echo PHP_EOL;
                    return;
                }
                $livreDispo = true;
                $dispo = $livre;
            }*/
            echo "Vous avez reservé le livre";
            echo PHP_EOL;
            $examp = $livre->getExemplaire();
            $exemp--;
        }
            else{
                echo "Le livre demandé n'est pas disponible.";
                echo PHP_EOL;
            }
        }
        /*if ($chambreDispo === true){
            echo "Livre prêté";
            //$dispo->setClient($client);
            echo PHP_EOL;
            return;
        }*/
        

       
    }

    
}

?>