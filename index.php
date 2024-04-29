<?php

spl_autoload_register(function($class_name){
    require 'classes/'. $class_name . '.php';
});


//titulaire
$titulaire = new Titulaire("Nom","Prenom","11-01-2000","Lyon");
//Compte(s) Bancaire(s)
$cb = new CompteBancaire("compte courant",100,"€",$titulaire);

echo $cb->debiter(100);
