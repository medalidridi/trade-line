<?php
include("../model/entreprise.php");
if(isset($_POST['ajoute']))

{
	$nom=$_POST['nom'];
	$login=$_POST['login'];
	$pwd=$_POST['pwd'];
	$email=$_POST['email'];
	$description=$_POST['description'];
	$tel=$_POST['tel'];
	$adresse=$_POST['adresse'];
	$logo=$_POST['logo'];
	

$u=new entreprise();
$u->nom=$nom;
$u->login=$login;
$u->pwd=$pwd;
$u->email=$email;
$u->description=$description;
$u->tel=$tel;
$u->adresse=$adresse;
$u->logo=$logo;
$u->Addentreprise($u);
echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='vueentreprise.php'
</script>";
}
?>