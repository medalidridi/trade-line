<?php

include("../model/panier1.php");

    $qte=$_POST['qte'];
	$session=$_POST['session'];
	$statut="0";
	
	
 
	
$u=new panier();

$u->qte=$qte;
$u->session=$session;


$u->ajout_commande($u) ;

echo"<script language='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../identifiant.php'
</script>";

?>