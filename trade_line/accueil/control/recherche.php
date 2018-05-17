<?php
include("../model/produit.php");
$nom=$_GET['nom'];
	

$u=new produit();
$u->nom=$nom;


$u->Affproduit_rechercher($u);

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../produit_rechercher.php?nom= $_POST ['nom']'
</script>";

?>