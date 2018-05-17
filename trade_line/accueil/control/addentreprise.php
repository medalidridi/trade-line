<?php
include("../model/entreprise.php");
$erreur='non';

	$nom=$_POST['nom'];
	$nomprop=$_POST['nomprop'];
	$numtva=$_POST['numtva'];
	$rc=$_POST['rc'];	
	$login=$_POST['login'];
	$pwd=$_POST['pwd'];
	$email=$_POST['email'];
	$description=$_POST['description'];
	$tel=$_POST['tel'];
	$adresse=$_POST['adresse'];
	$id_secteur=$_POST['secteur'];
   
	

if ($erreur=='non'){
$u=new entreprise();

$u->nom=$nom;
$u->nomprop=$nomprop;
$u->numtva=$numtva;
$u->rc=$rc;
$u->login=$login;
$u->pwd=$pwd;
$u->email=$email;
$u->description=$description;
$u->tel=$tel;
$u->adresse=$adresse;
$u->secteur=$id_secteur;


$u->Addentreprise($u);

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../formulaire_entreprise.php'
</script>";
}
?>
