<?php
class produit {
	
	public $nom;
	public $prix;	
	public $description;
	public $id;
	public $id_produit;
	
	
	public function Addproduit(produit $produit)
	
	{
	include("config.php");
	
		$q=$db->prepare('insert into produit set nom= :nom ,prix= :prix ,id_categorie= :id_categorie ,id_secteur= :id_secteur ,description= :description ,stock= :stock ,photo= :photo ,id_entreprise= :id_entreprise');
		$q->bindValue(':nom',$produit->nom);
		$q->bindValue(':prix',$produit->prix);
		$q->bindValue(':id_categorie',$produit->categorie);
		$q->bindValue(':id_secteur',$produit->secteur);
		$q->bindValue(':description',$produit->description);
		$q->bindValue(':stock',$produit->stock);
		$q->bindValue(':photo',$produit->photo);
		$q->bindValue(':id_entreprise',$produit->id_entreprise);
		
		$q->execute();
	}
	
	public function Affproduit()
	{
		include("config.php");
		$tab=array();
		$q=$db->prepare('select * from produit');
		$q->execute();
		while ($donnees=$q->fetch($db::FETCH_ASSOC))
{
		$tab[]=$donnees;}
		if ($tab){
		return $tab;}
		else { return; }

	}
	
	public function suppproduitbyid($id)
{
	include("config.php");
	$q=$db->prepare('delete from produit where id = :id');
	$q->execute(array(':id'=>$id));
}

	public function suppproduitpanier($id)
{
	include("config.php");
	$q=$db->prepare('delete from panier where id = :id');
	$q->execute(array(':id'=>$id));
}
	
	public function affproduitbyid($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from produit where id= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;
}


	public function affproduitbycateg($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from produit where id_categorie= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetchAll();   //affichage de la base de donnee
	return $donnees;
}

	public function affproduitbysouscateg($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from produit where id_sous_categorie= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetchAll();   //affichage de la base de donnee
	return $donnees;
}


public function affprodid($id)
	{
		
	include("config.php");	
	$q=$db->prepare('select * from produit where id_entreprise= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetchAll();    //affichage de la base de donnee
	return $donnees;

}


public function aff_produitB($id_p){
	
include("config.php");	
	$q=$db->prepare('select * from produit where id= :id');
	$q->execute(array(':id'=>$id_p));
	$donnees=$q->fetchAll();    //affichage de la base de donnee
	return $donnees;	
	
	
}

	public function modifproduit(produit $produit)
	{
		include("config.php");
$q=$db->prepare('update  produit set nom= :nom ,prix= :prix ,id_categorie= :categorie ,description= :description where id= :id');
		
		$q->bindValue(':id',$produit->id);
		$q->bindValue(':nom',$produit->nom);
		$q->bindValue(':prix',$produit->prix);
		$q->bindValue(':categorie',$produit->categorie);
		$q->bindValue(':description',$produit->description);
		$q->execute();

}

public function affproduitsecteur($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from produit where id_secteur= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetchAll();    //affichage de la base de donnee
	return $donnees;
}



	public function Affproduit_rechercher($nom,$id)
	
	{
	include("config.php");	
	$q=$db->prepare('select * from produit where nom= :nom and id_entreprise= :id');
	$q->execute(array(':nom'=>$nom,':id'=>$id));
	$donnees=$q->fetchAll();    //affichage de la base de donnee
	return $donnees;
}





}
?>