<?php 
class Archer extends Personnage{
    public function __construct($nom, $atk, $vie)
    {
        parent::__construct($nom, $atk, $vie);
    }

    public function attaque($cible){
        $cible->vie -= $this->atk;
        parent::attaque($cible);
    }
}
?>