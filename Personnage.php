<?php 
Class Personnage {

    private static $max_vie = 120;
    private $vie;
    private $atk;
    private $nom;

    public function __construct($nom, $atk, $vie){
        $this->nom = $nom;
        $this->atk = $atk;
        $this->vie = $vie;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getVie(){
        return $this->vie;
    }

    public function getAttaque(){
        return $this->atk;
    }

    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = self::$max_vie;
        } else {
            $this->vie += $vie;
        }
    }



    private function empecher_negatif(){
        if($this->vie < 0){
            $this->vie = 0;
        }
    }

    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }

    public function mort(){
        return $this->vie <=0;
    }
}
?>