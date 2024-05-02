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



//getter & setter _soldeInitial
    public function get_soldeInitial()
    {
        return $this->_soldeInitial;
    }

    public function set_soldeInitial($_soldeInitial)
    {
        $this->_soldeInitial = $_soldeInitial;

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


    //getter & setter solde
    public function get_solde()
    {
        return $this->_solde;
    }


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


//virement()
      public function virement(CompteBancaire $destinataire, float $montant){
        echo "un montant de ".$montant." ".$this->_deviseMonetaire." est envoyé vers le compte de ".$destinataire->get_titulaire()->get_nom()." ".$destinataire->get_titulaire()->get_prenom()."<br>";
        $this->set_solde(-$montant);
      }

//afficherInfos
    public function afficherInfos(){
        return $this->_titulaire." ".$this->_libelle."  ".$this->_soldeInitial.$this->_deviseMonetaire;
    }
    //*********__toString */
    public function __toString()
    {
        return "Compte Bancaire de ".$this->_titulaire." <br>";
    }
}
