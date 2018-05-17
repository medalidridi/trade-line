<?php
class commande {
	public $nom;
	public $prix;
	public $categorie;
	public $description;
	
	
	public function	add_commande(commande $commande){
	
	include("config.php");
	$q=$db->prepare('insert into commande id_commande= :id_commande ,id_produit= :id_produit ,id_client= :id_client, qte= :qte, prix= :prix');
	$q->bindValue(':id_commande',$commande->id_commande);
	$q->bindValue(':id_produit',$commande->id_produit);
	$q->bindValue(':id_client',$commande->id_client);
	$q->bindValue(':qte',$commande->qte);
	$q->bindValue(':prix',$commande->prix);
	$q->execute();
	
}
	

	public function Affcommande()
	{
		include("config.php");
		$q=$db->prepare('select * from commande');
		$q->execute();
		$donnees=$q->fetchAll();   //affichage de la base de donnee
	return $donnees;

	}
	
	public function suppproduitbyid($id)
{
	include("config.php");
	$q=$db->prepare('delete from commande where id = :id');
	$q->execute(array(':id'=>$id));
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