<?php
class commande {
	public $nom;
	public $prix;
	public $categorie;
	public $description;
	

	public function Affcommande()
	{
		include("config.php");
		$q=$db->prepare('select * from panier where commande="1"');
		$q->execute();
		$donnees=$q->fetchAll();   //affichage de la base de donnee
	return $donnees;

	}
	
	public function suppproduitbyid($id_commande)
{
	include("config.php");
	$q=$db->prepare('delete from panier where id_commande = :id_commande');
	$q->execute(array(':id_commande'=>$id_commande));
}
	
	public function affproduitbyid($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from commande where id= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;
}

public function affproduitbyidd($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from produit where id= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;
}



	public function AffFacture()
	{
	include("config.php");	
	$q=$db->prepare('select * from commande ');
	$q->execute();
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;
}


public function affidclient($id)
	{
		include("config.php");
		
		$q=$db->prepare('select * from commande where id= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	
	return $donnees;
}



}
?>