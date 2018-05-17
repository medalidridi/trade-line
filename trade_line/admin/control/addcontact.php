<?php
$erreur='non';
include("../model/contact.php");
if(isset($_POST['envoyer']))

{
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$telephone=$_POST['telephone'];
	$email=$_POST['email'];
	$adresse=$_POST['adresse'];
	$sujet=$_POST['sujet'];
	$message=$_POST['message'];
	if (($nom=="")||($prenom=="")||($telephone=="")||($email=="")||($adresse=="")||($sujet=="")||($message==""))
	{$erreur='oui';
		echo"<script langage='javascript'>
				alert('remplir les champ'),parent.location.href='vuecontact.php'
				</script>";}

if ($erreur=='non'){
$u=new contact();
$u->nom=$nom;
$u->prenom=$prenom;
$u->telephone=$telephone;
$u->email=$email;
$u->adresse=$adresse;
$u->sujet=$sujet;
$u->message=$message;
$u->Addcontact($u);



$sujet = "$sujet";
$message = "$message";
$destinataire = 'a97848mhb@gmail.com';
$headers = "From: \"expediteur moi\"<moi@domaine.com>\n";
$headers .= "Reply-To: a97848mhb@gmail.com\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
mail($destinataire,$sujet,$message,$headers);


echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='vuecontact.php'
</script>";
}}
?>