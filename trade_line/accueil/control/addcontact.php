<?php
$erreur='non';
include("../model/contact.php");
if(isset($_POST['envoyer']))

{
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	if (($nom=="")||($prenom=="")||($email=="")||($message==""))
	{$erreur='oui';
		echo"<script langage='javascript'>
				alert('remplir les champ'),parent.location.href='../template-contact-2.html'
				</script>";}

if ($erreur=='non'){
$u=new contact();
$u->nom=$nom;
$u->prenom=$prenom;
$u->email=$email;
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
parent.location.href='../template-contact-2.html'
</script>";
}}
?>