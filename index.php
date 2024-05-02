<h1> Banques </h1>


<?php

spl_autoload_register(function($class_name){
    require 'classes/'. $class_name . '.php';
});


//titulaire
$titulaire = new Titulaire("Schmitt","Jean","11-01-1972","Molsheim");
//Comptes Bancaires
$cb = new CompteBancaire("Compte Courant",100,"€",$titulaire);
$cb2 = new CompteBancaire("Livret A", 50000,"€", $titulaire);

//titulaire2
$titulaire2 = new Titulaire("Eos", "Pierron", "02-07-2000", "Lyon");
//Comptes bancaires
$cb3 = new CompteBancaire("Compte Courant", 249, "€", $titulaire2);
$cb4 = new CompteBancaire("Livret A", 5600, "€", $titulaire2);


    //tests

//debiter
echo $cb->debiter(100);
//crediter
echo $cb3->crediter(200);
//virement
$cb2->virement($cb4, 1800);

//afficherInfos() des titulaires
echo "titulaire 1: ".$titulaire->afficherInfos()."<br>";
echo "titulaire 2: ".$titulaire2->afficherInfos()."<br>";

//afficherInfos() des comptes bancaires
echo "compte 1: ".$cb->afficherInfos();
echo "compte 2: ".$cb2->afficherInfos();
