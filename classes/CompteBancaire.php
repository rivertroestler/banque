<?php

class CompteBancaire {

    private string $_libelle;
    private float $_solde;
    private string $_deviseMonetaire;
    private Titulaire $_titulaire;

    public function __construct(string $_libelle, float $_solde, string $_deviseMonetaire, Titulaire $_titulaire)
    {
        $this->_libelle = $_libelle;
        $this->_solde = $_solde;
        $this->_deviseMonetaire = $_deviseMonetaire;
        $this->_titulaire = $_titulaire;
        $_titulaire->ajouterCompteBancaire($this);
    }

//getter & setter _libelle
    public function get_libelle()
    {
        return $this->_libelle;
    }

    public function set_libelle($_libelle)
    {
        $this->_libelle = $_libelle;

        return $this;
    }



//getter & setter _solde
    public function get_solde()
    {
        return $this->_solde;
    }

    public function set_solde($_solde)
    {
        $this->_solde = $_solde;

        return $this;
    }



    //getter & setters deviseMonetaire
    public function get_deviseMonetaire()
    {
        return $this->_deviseMonetaire;
    }


    public function set_deviseMonetaire($_deviseMonetaire)
    {
        $this->_deviseMonetaire = $_deviseMonetaire;

        return $this;
    }


    //getter & setter titulaire
    public function get_titulaire()
    {
        return $this->_titulaire;
    }

    public function set_titulaire($_titulaire)
    {
        $this->_titulaire = $_titulaire;

        return $this;
    }
