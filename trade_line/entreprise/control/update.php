<?php session_start();
$id=$_SESSION['id'];

include("../model/panier1.php");
if(isset($_POST['Mettre à jour']))

{   $idd=$_GET['id'];
	$qte=$_POST['qte'];
	$prix=$_POST['prix'];
	
	
$u=new panier();
$u->id=$id;
$u->qte=$qte;
$u->prix=$prix;
$u->UpdatePanier($u);

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../vuepanier.php'
</script>";
}
?>