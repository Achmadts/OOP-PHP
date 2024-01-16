<?php
require_once "Animal.php";
require_once "Frog.php";
require_once "Ape.php";

$sheep = new Animal("shaun");
echo "Name: ". $sheep->name . "<br>";
echo "legs: " . $sheep->legs . "<br>";
echo "cold bloded: " . $sheep->cold_blood . "<br>";

echo "<br>";

$sungokong = new Frog("Buduk");
echo "Name: ". $sungokong->name . "<br>";
echo "legs: " . $sungokong->legs . "<br>";
echo "cold bloded: " . $sungokong->cold_blood . "<br>";
echo "Jump : ";
$sungokong->jump();

echo "<br><br>";

$kodok = new Ape("Kera sakti");
echo "Name: ". $kodok->name . "<br>";
echo "legs: " . $kodok->legs . "<br>";
echo "cold bloded: " . $kodok->cold_blood . "<br>";
echo "Yell : ";
$kodok->yell();


?>