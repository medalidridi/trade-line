<?php 
class panier{
	public $id;
	public $id_session;
	public $qte;
	public $prix;
	
	
	
	
public function	add_panier(panier $panier){
	
session_start();                               //démarrage de la session  
$ref = $_GET['ajout'];                       //référence du produit choisi        
if(isset($ref )){                                   //si $ref n'est pas vide         
if(!isset($_SESSION['caddie'])){    //si le caddie n'a pas été encore créé
$_SESSION['caddie'] = array();       //création de la variable de session
 }
if(isset($_SESSION['caddie'][$ref ])) {      //si ce produit a déjà été choisi 
$_SESSION['caddie'][$ref ]++;                  //ajoute 1 a la quantité       
}else {
$_SESSION['caddie'][$ref ] = 1;                //si 1er ajout, met la quantité à 1  
}
}

}
	


public function aff_panier(){
	session_start();         //démarrage de la session
 
//Requête pour récupérer toutes les informations des produits et calcul du prix total.
foreach ($_SESSION['caddie'] as $idProduit => $quantite) {
$rq="SELECT * FROM produit where id='$idProduit'";
$res=mysql_query($rq)or die("erreur dans la requete" );
$data=mysql_fetch_array($res);
$nom=$data['nom'];
$prix_unitaire=$data['prix_client'];
$prix_total=$prix_unitaire*$quantite;
$caddie += $prix_total;
 
}
		
		
	
}

public function UpdatePanier(panier $panier)
	{
		include("config.php");
$q=$db->prepare('update  panier set qte= :qte ,prix= :prix where id= :id');
		$q->bindValue(':id',$panier->id);
		$q->bindValue(':qte',$panier->qte);
		$q->bindValue(':prix',$panier->prix);
     
		$q->execute();

}

public function affpanierbyid_commande($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from panier where id_commande= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;

}

public function supp_panier()
	{

session_start();                          //démarrage de la session
$ref = $_GET['retrait'];                //référence du produit à retirer
$array = $_SESSION['caddie']; //attribue le tableau à $array
$key = array_search($ref, $array); //recherche la référence et attribue son rang dans le tableau à $key
array_splice($_SESSION['caddie'], $key, 1); //fonction PHP qui retire l'élément situé au rang enregistré dans $key
 

	}


}


?>