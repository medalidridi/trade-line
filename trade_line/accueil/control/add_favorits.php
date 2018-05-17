<?php 


$id_client=$_GET['id_client'];
$id_produit=$_GET['id'];

include("../model/config.php");
include("../model/favorits.php");

$u=new favorits();
$u->id_produit=$id_produit;
$u->id_client=$id_client;
$u->add_favorits($u);

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../favorits.php?id=$id_client'
</script>";

?>