<?php
include("../model/message_client.php");
if(isset($_POST['repondre']))

{   $id_client=$_GET['id2'];
    $id_entreprise=$_GET['id'];	
	$nom=$_POST['nom'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$msg=$_POST['msg'];
	
	

$u=new message_client();

$u->id_client=$id_client;
$u->id_entreprise=$id_entreprise;
$u->nom=$nom;
$u->email=$email;
$u->tel=$tel;
$u->msg=$msg;

$u->envoyerMessage($u);

echo"<script langage='javascript'>
alert('votre message a ete envoye avec succes'),
parent.location.href='../boite_reception.php?id=$id_entreprise'
</script>";
}
?>