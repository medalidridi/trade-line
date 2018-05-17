<?php
$id=$_GET['id'];

include("../model/entreprise.php");
$U=new entreprise();
$res=$U->suppentreprisebyid($id);
echo"<script langage='javascript'>
parent.location.href='../entreprise.php'
</script>";


?>