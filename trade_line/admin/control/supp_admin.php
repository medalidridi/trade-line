<?php
$id=$_GET['id'];

include("../model/admin.php");
$U=new admin();
$res=$U->suppadminbyid($id);
echo"<script langage='javascript'>
parent.location.href='../admin.php'
</script>";


?>