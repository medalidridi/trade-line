<?php session_start();
$id_session=session_id();
$id_produit=$_GET['id'];
$qte='1';
$statut="0";
include("../model/config.php");
  $st = $db->query("SELECT * FROM produit WHERE id='$id_produit'")->fetch();
  $prix=$st['prix'] ;
 
include("../model/panier1.php");

$u=new panier();
$u->id_produit=$id_produit;
$u->qte=$qte;
$u->prix=$prix;
$u->statut=$statut;
$u->id_session=$id_session;
$u->add_panier($u);
echo "<script language='javascript'>parent.location.href='../vuepanier.php'</script>";

?>