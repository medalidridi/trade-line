<?php
$id=$_GET['id'];

include("../model/produit.php");
$U=new produit();
$res=$U->suppproduitbyid($id);
echo"<script langage='javascript'>
parent.location.href='../produit.php'
</script>";


?>