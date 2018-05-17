<?php
$id=$_GET['id'];

include("../model/produit.php");
$U=new produit();
$res=$U->suppproduitpanier($id);

echo"<script langage='javascript'>
parent.location.href='../vuepanier.php'
</script>";


?>