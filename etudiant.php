<?php

class Etudiant extends Personne{
    private $studentId;
    public function setStudentId($studentId){
      $this->studentId = $studentId;
    }
    public function getStudentId(){
      return $this->studentId;
    }
}