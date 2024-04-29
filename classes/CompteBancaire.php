<?php

class CompteBancaire {

    private string $_libelle;
    private float $_soldeInitial;
    private string $_deviseMonetaire;
    private Titulaire $_titulaire;
    private float $_solde;

    public function __construct(string $_libelle, float $_soldeInitial, string $_deviseMonetaire, Titulaire $_titulaire)
    {
        $this->_libelle = $_libelle;
        $this->_soldeInitial = $_soldeInitial;
        $this->_deviseMonetaire = $_deviseMonetaire;
        $this->_titulaire = $_titulaire;
    }

    /**
     * Get the value of _libelle
     */ 
    public function get_libelle()
    {
        return $this->_libelle;
    }

    /**
     * Set the value of _libelle
     *
     * @return  self
     */ 
    public function set_libelle($_libelle)
    {
        $this->_libelle = $_libelle;

        return $this;
    }

    /**
     * Get the value of _soldeInitial
     */ 
    public function get_soldeInitial()
    {
        return $this->_soldeInitial;
    }

    /**
     * Set the value of _soldeInitial
     *
     * @return  self
     */ 
    public function set_soldeInitial($_soldeInitial)
    {
        $this->_soldeInitial = $_soldeInitial;

        return $this;
    }

    /**
     * Get the value of _deviseMonetaire
     */ 
    public function get_deviseMonetaire()
    {
        return $this->_deviseMonetaire;
    }

    /**
     * Set the value of _deviseMonetaire
     *
     * @return  self
     */ 
    public function set_deviseMonetaire($_deviseMonetaire)
    {
        $this->_deviseMonetaire = $_deviseMonetaire;

        return $this;
    }

    /**
     * Get the value of _titulaire
     */ 
    public function get_titulaire()
    {
        return $this->_titulaire;
    }

    /**
     * Set the value of _titulaire
     *
     * @return  self
     */ 
    public function set_titulaire($_titulaire)
    {
        $this->_titulaire = $_titulaire;

        return $this;
    }
        /**
     * Get the value of _solde
     */ 
    public function get_solde()
    {
        return $this->_solde;
    }

    /**
     * Set the value of _solde
     *
     * @return  self
     */ 
    public function set_solde($_solde)
    {
        $this->_solde = $_solde;

        return $this;
    }


    //******Méthodes personnalisées */
// créditer()
    public function crediter($_solde){
        $this->_soldeInitial += $_solde;
        return "Le solde est crédité de ".$_solde.$this->_deviseMonetaire."<br>"."Le solde actuel s'éléve à ".$this->_soldeInitial.$this->_deviseMonetaire."<br>";
    }
//debiter()
    public function debiter($_solde){
        $this->_soldeInitial -= $_solde;
        return "Le solde est débité de ".$_solde.$this->_deviseMonetaire."<br>"."Le solde actuel s'éléve à ".$this->_soldeInitial.$this->_deviseMonetaire."<br>";
    }


    //*********__toString */
    public function __toString()
    {
        return "Compte Bancaire de ".$this->_titulaire." <br>";
    }
}
