<?php
 session_start();
$id=$_GET['id'];

include("../model/favorits.php");
$U=new favorits();
$res=$U->suppFavoritsByid($id);
echo"<script langage='javascript'>
parent.location.href='../favorits.php?id=$id'
</script>";


?>