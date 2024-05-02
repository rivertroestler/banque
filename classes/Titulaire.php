<?php

class Titulaire {
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_ville;
    private array $_comptesBancaires;

    public function __construct(string $_nom, string $_prenom, string $_dateNaissance, string $_ville)
    {
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_dateNaissance = new DateTime($_dateNaissance);
        $this->_ville = $_ville;
        $this->_comptesBancaires = [];
    }


//getter & setter nom
    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

 
  //getter &setter prenom
    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

 

//getter & setter dateNaissance
    public function get_dateNaissance()
    {
        return $this->_dateNaissance;
    }

    public function set_dateNaissance($_dateNaissance)
    {
        $this->_dateNaissance = $_dateNaissance;

        return $this;
    }

//getter & setter ville
    public function get_ville()
    {
        return $this->_ville;
    }

    public function set_ville($_ville)
    {
        $this->_ville = $_ville;

        return $this;
    }

//getter & setter comptesBancaire
    public function get_comptesBancaires()
    {
        return $this->_comptesBancaires;
    }

    public function set_comptesBancaires($_comptesBancaires)
    {
       array_push($this->_comptesBancaires);
    }

///ajouterCompteBancaire
    public function ajouterCompteBancaire(CompteBancaire $_compteBancaire){
      array_push($this->_comptesBancaires, $_compteBancaire);
    }


//afficherInfos()
    public function afficherInfos(){
      $now = new Datetime();
      $diff = $this->_dateNaissance->diff($now);
      $result = $this->_nom." ".$this->_prenom." , né à ".$this->_ville." , agé de ".$diff->format("%y ans")."<br>";
      $result .= "comptes du titulaire : <br>";
      foreach ($this->_comptesBancaires as $_compteBancaire){
        $result.= " - ".$_compteBancaire->get_libelle().": solde".$_compteBancaire->get_solde().$_compteBancaire->get_deviseMonetaire()."- Titulaire: ".$this->_nom." ".$this->_prenom." <br>";
      }
      
    }
    ///*****toString*************** */
    public function __toString()
    {
        return $this->_prenom." ".$this->_nom;
    }
}
