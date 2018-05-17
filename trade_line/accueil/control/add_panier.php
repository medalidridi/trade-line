<?php

	
include("../model/config.php");

 session_start();
$id_session=session_id();
$_SESSION['id_session'] = $id_session;
$id_produit=$_GET['id'];
$qte='1';
$statut="0";
$commande="1";

$stat = $db->query("SELECT COUNT(*) FROM panier WHERE id_session='$id_session' ")->fetch();
    if ($stat['COUNT(*)'] >= 1){
		$commande="0";
	}

  $st = $db->query("SELECT * FROM produit WHERE id='$id_produit'")->fetch();
  $prix=$st['prix'] ;
 
include("../model/panier1.php");

$u=new panier();
$u->id_produit=$id_produit;
$u->qte=$qte;
$u->prix=$prix;
$u->statut=$statut;
$u->id_session=$id_session;
$u->commande=$commande;
$u->add_panier($u);
echo "<script language='javascript'>
history.go(-1); 
</script>";

?>