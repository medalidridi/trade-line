<?php session_start();

include("../model/produit.php");
if(isset($_POST['ajouter']))

{   
$id=$_GET['id'];
	$nom=$_POST['nom'];
	$prix=$_POST['prix'];
	$id_categorie=$_POST['categorie'];
	$id_secteur=$_POST['secteur'];
	$description=$_POST['description'];
	$stock=$_POST['stock'];
	
	
$nomOrigine = $_FILES['photo']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
$extensionsAutorisees = array("jpeg", "jpg", "gif","png");
if (!(in_array($extensionFichier, $extensionsAutorisees))) {
    echo "Le fichier n'a pas l'extension attendue";
} else {    
    // Copie dans le repertoire du script avec un nom
    // incluant l'heure a la seconde pres 
    $repertoireDestination = "../produit/";
    $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

  move_uploaded_file($_FILES["photo"]["tmp_name"], $repertoireDestination.$nomDestination);

	
	
}


$u=new produit();

$u->nom=$nom;
$u->prix=$prix;
$u->categorie=$id_categorie;
$u->secteur=$id_secteur;
$u->description=$description;
$u->stock=$stock;
$u->photo=$nomDestination;
$u->id_entreprise=$id;

$u->Addproduit($u);


echo"<script langage='javascript'>
alert('vos parametres sont ajoutés'),
parent.location.href='../produit_entreprise.php?id=$id'
</script>";
}
?>