<?php
include("../model/sous_categorie.php");
if(isset($_POST['ajoute']))

{
	$nom=$_POST['nom'];	
	$sousCategorie=$_POST['sousCategorie'];
	
	

$u=new sousCategorie();
$u->nom=$nom;
$u->sousCategorie=$sousCategorie;
$u->AddSousCategorie($u);
echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../sous_categorie.php'
</script>";
}
?>