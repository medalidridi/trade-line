<?php
include("../model/entreprise.php");
if(isset($_POST['ajoute']))

{
	$nom=$_POST['nom'];
	$pwd=$_POST['pwd'];
	$email=$_POST['email'];
	$description=$_POST['description'];
	$tel=$_POST['tel'];
	$adresse=$_POST['adresse'];
	
	

$u=new entreprise();
$u->nom=$nom;

$u->pwd=$pwd;
$u->email=$email;
$u->description=$description;
$u->tel=$tel;
$u->adresse=$adresse;

$u->modifentreprise($u);
echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../profil.php'
</script>";
}
?>