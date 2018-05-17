<?php
$id=$_GET['id'];

include("../model/categorie.php");
$U=new categorie();
$res=$U->suppcategoriebyid($id);
echo"<script langage='javascript'>
parent.location.href='../categorie.php'
</script>";


?>