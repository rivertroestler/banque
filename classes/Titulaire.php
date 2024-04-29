<?php

class Titulaire {
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_ville;
    private array $_comptesBancaire;

    public function __construct(string $_nom, string $_prenom, string $_dateNaissance, string $_ville)
    {
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_dateNaissance = new DateTime($_dateNaissance);
        $this->_ville = $_ville;
        $this->_comptesBancaire = [];
    }


    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _dateNaissance
     */ 
    public function get_dateNaissance()
    {
        return $this->_dateNaissance;
    }

    /**
     * Set the value of _dateNaissance
     *
     * @return  self
     */ 
    public function set_dateNaissance($_dateNaissance)
    {
        $this->_dateNaissance = $_dateNaissance;

        return $this;
    }

    /**
     * Get the value of _ville
     */ 
    public function get_ville()
    {
        return $this->_ville;
    }

    /**
     * Set the value of _ville
     *
     * @return  self
     */ 
    public function set_ville($_ville)
    {
        $this->_ville = $_ville;

        return $this;
    }

    /**
     * Get the value of _comptesBancaire
     */ 
    public function get_comptesBancaire()
    {
        return $this->_comptesBancaire;
    }

    /**
     * Set the value of _comptesBancaire
     *
     * @return  self
     */ 
    public function set_comptesBancaire($_comptesBancaire)
    {
        $this->_comptesBancaire = $_comptesBancaire;

        return $this;
    }

///ajouter compte bancaire
    public function ajouterCompteBancaire(CompteBancaire $_compteBancaire){
        $this->_comptesBancaire[] = $_compteBancaire;
        $result .=$_compteBancaire->afficherInfos()."<br>";
    }

    ///*****toString*************** */
    public function __toString()
    {
        return $this->_prenom." ".$this->_nom;
    }
}