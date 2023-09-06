<?php
require_once "./class/personne.php";
require_once "./class/etudiant.php";
require_once "./class/Profs.php";
require_once "./class/Shapes.php";
$peter = new Personne("Peter");

//$peter->setName("Peter c'est une personne");
echo $peter->getName();

$chahine=new Etudiant("<br> je suis Chahine");
echo $chahine->getName();
echo "<br> ID : ";
$chahine->setStudentId(1);
echo $chahine->getStudentId();
echo "<br>";
$circle=new Circle(2);
echo "radius : ".$circle->calcArea();
echo "<br>";
$rectangle=new Rectangle(10,15);
echo "rectangle : ".$rectangle->calcArea();
//$chahine->setName("<NAME>");      
//echo $peter->address;

//$peter->address = "ma super adresse";
?>