<?php

$id=$_GET['id'];

include("../model/produit.php");
$U=new produit();
$res=$U->suppproduitbyid($id);

session_start();
$id=$_SESSION['id'];

echo"<script langage='javascript'>
parent.location.href='../produit_entreprise.php?id=$id'
</script>";


?>