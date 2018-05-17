<?php
include("../model/produit.php");
if(isset($_POST['ajoute']))

{
	$nom=$_POST['nom'];
	$prix=$_POST['prix'];
	$categorie=$_POST['categorie'];
	$description=$_POST['description'];
	

$u=new produit();
$u->nom=$nom;
$u->prix=$prix;
$u->categorie=$categorie;
$u->description=$description;
$u->Addproduit($u);
echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../produit.php'
</script>";
}
?>