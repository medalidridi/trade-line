<?php
include("../model/produit.php");
$id=$_GET['id'];
	

$u=new produit();
$u->id=$id;


$u->affproduitbycateg($u);
echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../profil.php'
</script>";

?>