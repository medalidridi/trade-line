<?php
if (isset($_POST['enregistrer']))
	
	{
include("../model/client.php");

	$id=$_GET['id'];
	$ville=$_POST['ville'];
	$pays=$_POST['pays'];
	$code_postal=$_POST['code_postal'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$description=$_POST['description'];
	$telm=$_POST['telm'];
	$telf=$_POST['telf'];
	$adresse=$_POST['adresse'];
	
 
	
$u=new client();
$u->id=$id;
$u->nom=$nom;
$u->prenom=$prenom;
$u->ville=$ville;
$u->pays=$pays;
$u->code_postal=$code_postal;
$u->description=$description;
$u->telm=$telm;
$u->telf=$telf;
$u->adresse=$adresse;

$u->modifclient($u) ;

echo"<script language='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../commande.php?id=$id'
</script>";
}
?>