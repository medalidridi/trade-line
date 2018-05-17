<?php
include("../model/client.php");
if(isset($_POST['inscrit']))

{
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$login=$_POST['login'];
	$pwd=$_POST['pwd'];
	$tel=$_POST['tel'];
	$adresse=$_POST['adresse'];
	$civilite=$_POST['civilite'];
	$dnc=$_POST['dnc'];
	

$u=new client();
$u->nom=$nom;
$u->prenom=$prenom;
$u->email=$email;
$u->login=$login;
$u->pwd=$pwd;
$u->tel=$tel;
$u->adresse=$adresse;
$u->civilite=$civilite;
$u->dnc=$dnc;
$u->Addclient($u);

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../identifiant.php'
</script>";
}
?>