<?php
$id=$_GET['id'];

include("../model/client.php");
$U=new client();
$res=$U->suppclientbyid($id);
echo"<script langage='javascript'>
parent.location.href='../client.php'
</script>";


?>