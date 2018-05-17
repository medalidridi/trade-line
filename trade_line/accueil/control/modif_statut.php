<?php
$id_session=session_id();
include("../model/panier1.php");

    $id_client=$_GET['id_client'];
	$session=$_POST['session'];
	
	
	
 
	
$u=new panier();

$u->id=$id;
$u->session=$session;
$u->statut="1";

$u->modif_statut($u) ;



echo"<script language='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../paypal_success.php?id_client= $id_session'
</script>";


?>