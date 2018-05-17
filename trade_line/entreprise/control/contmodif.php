<?php
include("../model/produit.php");
if (isset($_POST['modifier']))
	{
	$id=$_GET['id'];
	$nom=$_POST['nom'];
	$prix=$_POST['prix'];
	$categorie=$_POST['categorie'];
	$description=$_POST['description'];
	
$u=new produit();
$u->id=$id;
$u->nom=$nom;
$u->prix=$prix;
$u->categorie=$categorie;
$u->description=$description;
$u->modifproduit($u) ;

session_start();
$id=$_SESSION['id'];

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../produit_entreprise.php?id=$id'
</script>";
}
?>
	