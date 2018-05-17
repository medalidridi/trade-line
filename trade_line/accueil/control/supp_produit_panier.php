<?php

include("../model/panier1.php");

$id=$_GET['id'];
	
	
 
	
$u=new panier();

$u->id=$id;
$u->id_session="0";


$u->modifier_commande($u) ;



echo"<script language='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../vuepanier.php'
</script>";


?>