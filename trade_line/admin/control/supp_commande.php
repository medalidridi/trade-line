<?php
$id_commande=$_GET['id_commande'];
include("../model/commande.php");
$U=new commande();
$res=$U->suppproduitbyid($id_commande);
echo"<script langage='javascript'>
parent.location.href='../commande.php'
</script>";


?>