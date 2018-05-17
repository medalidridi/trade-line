<?php
$id=$_GET['id'];

include("../model/secteur.php");
$U=new secteur();
$res=$U->suppsecteurbyid($id);
echo"<script langage='javascript'>
parent.location.href='../secteur.php'
</script>";


?>