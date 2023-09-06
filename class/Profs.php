<?php 
class Proffesseur extends Personne 
{
    public $profId;
    public $salaire;
    public function setId($profId){
        $this->profId = $profId;
    }
    public function setSalaire($salaire){
        $this->salaire = $salaire;
    }
    public function getProfId(){
        return $this->profId;
    }
    public function getSalaire(){
        return $this->salaire;
    }
}



?>