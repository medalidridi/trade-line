<?php
include("../model/message.php");
if(isset($_POST['envoyer']))

{   $id_client=$_GET['id'];
    $id_entreprise=$_GET['id1'];
	$nom=$_POST['nom'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$msg=$_POST['msg'];
	

$u=new message();
$u->id_client=$id_client;
$u->id_entreprise=$id_entreprise;
$u->nom=$nom;
$u->email=$email;
$u->tel=$tel;
$u->msg=$msg;

$u->envoyerMessage($u);

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../msg_client.php?id=$id_client&id1=$id_entreprise'
</script>";
}
?>