<?php
include("../model/admin.php");
if(isset($_POST['ajoute']))

{
	$login=$_POST['login'];
	$pwd=$_POST['pwd'];
	

include("../config.php");

if (($login == "") or ($pwd == "")) {
    echo "<script language='javascript'>alert('veuillez saisir un login et un mot de passe'),parent.location.href='../ajout_admin.php'</script>";
}
else {
    $st = $db->query("SELECT COUNT(*) FROM admin WHERE login='$login' ")->fetch();
    if ($st['COUNT(*)'] == 1){
         echo "<script language='javascript'>alert('Votre login existe deja'),parent.location.href='../ajout_admin.php'</script>";} }

  if ($st['COUNT(*)'] == 0){

$u=new admin();
$u->login=$login;
$u->pwd=$pwd;
$u->AddAdmin($u) ;
echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../admin.php'
</script>";
}}
?>