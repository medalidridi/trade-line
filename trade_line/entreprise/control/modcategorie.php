<?php
include("../model/categorie.php");
if (isset($_POST['modifier']))
	{
	$id=$_GET['id'];
	$nom=$_POST['nom'];
	$prix=$_POST['prix'];
	$categorie=$_POST['categorie'];
	$description=$_POST['description'];
	
$u=new categorie();
$u->id=$id;
$u->nom=$nom;
$u->prix=$prix;
$u->categorie=$categorie;
$u->description=$description;
$u->modifcategorie($u) ;
echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../categorie.php'
</script>";
}
?>
	