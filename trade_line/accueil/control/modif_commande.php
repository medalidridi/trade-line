<?php
if (isset($_POST['enregistrer']))
	
	{
include("../model/panier1.php");

    $id=$_GET['id'];
	$session=$_POST['session'];
	$type=$_POST['type'];
	
	
 
	
$u=new panier();

$u->id=$id;
$u->session=$session;
$u->type=$type;

$u->modif_commande($u) ;

if ($type=="paiement electronique"){

echo"<script language='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../type_paiement.php?id=$id'
</script>";
}

else

{
echo"<script language='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../livraison.php?id=$id'
</script>";
}


	}
?>