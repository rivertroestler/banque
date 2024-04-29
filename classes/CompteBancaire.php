<?php

class CompteBancaire {

    private string $_libelle;
    private float $_soldeInitial;
    private string $_deviseMonetaire;
    private Titulaire $_titulaire;

    public function __construct(string $_libelle, float $_soldeInitial, string $_deviseMonetaire, Titulaire $_titulaire)
    {
        
    }
}
