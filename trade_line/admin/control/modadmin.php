<?php
include("../model/admin.php");
if (isset($_POST['modifier']))
	{
	$id=$_GET['id'];
	$login=$_POST['login'];
	$pwd=$_POST['pwd'];
	
	
$u=new admin();
$u->id=$id;
$u->login=$login;
$u->pwd=$pwd;
$u->modifadmin($u) ;
echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../admin.php'
</script>";
}
?>
	