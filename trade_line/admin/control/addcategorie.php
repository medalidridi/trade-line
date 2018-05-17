<?php
include("../model/categorie.php");
if(isset($_POST['ajoute']))

{  
$nom=$_POST['nom'];

$u=new categorie();
$u->nom=$nom;
$u->Addcategorie($u);

echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../categorie.php'
</script>";
}

?>