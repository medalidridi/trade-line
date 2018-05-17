<?php
include("../model/categorie.php");
if (isset($_POST['modifier']))
	{
	$id=$_GET['id'];
	$nom=$_POST['nom'];
	
	
$u=new categorie();
$u->id=$id;
$u->nom=$nom;
$u->modifcategorie($u) ;

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../categorie.php'
</script>";
}
?>
	