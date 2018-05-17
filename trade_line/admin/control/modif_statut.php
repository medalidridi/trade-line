<?php
include("../model/panier1.php");

	$id_session=$_GET['id_session'];
	$statut="2";
	
	
$u=new panier();
$u->id_session=$id_session;
$u->statut=$statut;
$u->Updatestatut($u) ;

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../commande.php'
</script>";

?>
	