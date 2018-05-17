<?php
include("../model/categorie.php");
	
	$id=$_GET['id'];
	
$u=new categorie();
$u->id=$id;
$u->affcategoriebyid($u) ;
echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../sous_categorie.php'
</script>";

?>
	