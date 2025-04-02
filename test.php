<?php
include("header.php");
require_once 'inc/manager-db.php';
 if (isset($_GET['name']) && !empty($_GET['name'])) {
   $nom = $_GET['name'];
   $desPays = getCountriesByContinent($nom);
 } else {
   $nom = "Monde";
   $desPays = getAllCountries();
 }
 
 require_once 'javascripts.php';
require_once 'footer.php';