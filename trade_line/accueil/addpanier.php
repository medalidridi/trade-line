<?php include("header-panier.php");
 ?>

<?php
$idsession = $_GET['id'];
if (isset($idsession))
{
	
	$panier->add($idsession);
	
	echo"<script langage='javascript'>
alert('Le produit a bien ete ajoute a votre panier retourner sur le catalogue')</script>";
	}
	
else
{
	
	die("vous navez pas selectioner le produit");
	}	

?>