<?php
include("../model/entreprise.php");
if (isset($_POST['modifier']))
	{
	$id=$_GET['id'];
	$nom=$_POST['nom'];
	
	
$u=new entreprise();
$u->id=$id;
$u->nom=$nom;
$u->modifentreprise($u) ;

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../entreprise.php'
</script>";
}
?>
	