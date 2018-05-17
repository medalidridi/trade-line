<?php
include("../model/secteur.php");
if (isset($_POST['modifier']))
	{
	$id=$_GET['id'];
	$nom=$_POST['nom'];
	
	
$u=new secteur();
$u->id=$id;
$u->nom=$nom;
$u->modifsecteur($u) ;

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../secteur.php'
</script>";
}
?>
	