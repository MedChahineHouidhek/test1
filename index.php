<?php
require_once "personne.php";
require_once "etudiant.php";
require_once "Profs.php";
$peter = new Personne("Peter");

//$peter->setName("Peter c'est une personne");
echo $peter->getName();

$chahine=new Etudiant("<br> je suis Chahine");
echo $chahine->getName();
echo "<br> ID : ";
$chahine->setStudentId(1);
echo $chahine->getStudentId();

//$chahine->setName("<NAME>");      
//echo $peter->address;

//$peter->address = "ma super adresse";
?>