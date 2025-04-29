<?php

abstract class Model{
    public const CATEGORIE = "Général";
    protected int $id=0;
    protected string $nom;
    protected float $prix;
public function __construct(string $nom, float $prix){
    if($prix<0){
        echo"indiquer un prix superieur a 0";
    }else{

        $this->id++;
        $this->nom  = $nom;
        $this->prix = $prix;
    }
}
public function afficherProduits():void{
    echo "<strong>Reference :</strong> " . $this->id . "<br>";
    echo "<strong>Nom du Produit :</strong> " . $this->nom . "<br>";
    echo "<strong>Prix :</strong> " . $this->prix . " € <br>";
    echo "<strong>Catégorie :</strong> " . static::CATEGORIE ."<br>";
}

public function getNom():void{
    echo $this->nom."<br>";
}
public function setNom($a):string{
return $this->nom=$a;
}
}

class Pull extends Model{
    public  const CATEGORIE="SweatShirt";
    
    
}
class Jogging extends Model{
    public  const CATEGORIE="Jogging";

}


$pull=new Pull("Abercrombie",19.99);
$pull->afficherProduits();
$pull->setNom("Pull and Bear");
$pull->getNom();
$pull->afficherProduits();
$jogo=new Jogging("Nike",-5);
$jogo->afficherProduits();