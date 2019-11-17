<?php

namespace Ipssi\Evaluation;

require_once('vendor/autoload.php');


class Document
{

    private $element;
    private $couleur;
    private $positionX;
    private $positionY;


    public function __construct(Element $element, Couleur $couleur, int $positionX, int $positionY)
    {
        $this->element = $element;
        $this->couleur = $couleur;
        if ($positionX < 0 || $positionY < 0){
            echo "Les paramètres de la position de l'élément ne peuvent pas être inférieure à 0 !";
            die;
        }
        else{
            $this->positionX = $positionX;
            $this->positionY = $positionY;
        }
    }

    public function getElement(): Element
    {
        return $this->element;
    }

    public function getCouleur(): Couleur
    {
        return $this->couleur;
    }
    
    public function getPositionX (): int
    {
        return $this->positionX;
    }

    public function getPositionY (): int
    {
        return $this->positionY;
    }

    

    public function toString(): String{
        $doc .= $this->getElement()->toString() . PHP_EOL;
        $doc .= "Couleur du document" . PHP_EOL;
        $doc .= $this->getCouleur()->toString() . PHP_EOL;
        $doc .= "Position du document" . PHP_EOL;
        $doc .="Position X : " . $this->getPositionX() . PHP_EOL;
        $doc .="Position Y : " . $this->getPositionY() . PHP_EOL;
        return $doc;
    }

}

    ?>