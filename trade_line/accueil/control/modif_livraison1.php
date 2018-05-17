<?php
if (isset($_POST['enregistrer']))
	
	{
include("../model/panier1.php");

    $id=$_GET['id'];
	$session=$_POST['session'];
	$livraison=$_POST['livraison'];
	
	
 
	
$u=new panier();

$u->id=$id;
$u->session=$session;
$u->livraison=$livraison;

$u->modif_livrasion($u) ;

echo"<script language='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../paiement.php?id=$id'
</script>";
}
?>