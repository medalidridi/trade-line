<?php
session_start();                          //démarrage de la session
$ref = $_GET['retrait'];                //référence du produit à retirer
$array = $_SESSION['caddie']; //attribue le tableau à $array
$key = array_search($ref, $array); //recherche la référence et attribue son rang dans le tableau à $key
array_splice($_SESSION['caddie'], $key, 1); //fonction PHP qui retire l'élément situé au rang enregistré dans $key
?>