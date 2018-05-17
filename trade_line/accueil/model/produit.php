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
	
		$q=$db->prepare('insert into produit set nom= :nom ,prix= :prix ,id_categorie= :categorie ,description= :description,photo= :photo ,id_entreprise= :id_entreprise');
		$q->bindValue(':nom',$produit->nom);
		$q->bindValue(':prix',$produit->prix);
		$q->bindValue(':categorie',$produit->categorie);
		$q->bindValue(':description',$produit->description);
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
	
	
	
	
	
		public function Affproduit_rechercher($nom)
	
	{
	include("config.php");	
	$q=$db->prepare('select * from produit where nom= :nom');
	$q->execute(array(':nom'=>$nom));
	$donnees=$q->fetchAll();    //affichage de la base de donnee
	return $donnees;
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




	public function affproduitbycategorie($id_categorie)
	{
	include("config.php");	
	$q=$db->prepare('select * from produit where id_categorie= :id_categorie');
	$q->execute(array(':id_categorie'=>$id_categorie));
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


public function affproduitpaiement($id_session)
	{
	include("config.php");	
	$q=$db->prepare('select p.nom from produit p , panier pa where pa.id_session= :id_session and p.id=pa.id_produit');
	$q->execute(array(':id_session'=>$id_session));
	$donnees=$q->fetchAll();    //affichage de la base de donnee
	return $donnees;
}




public function affnomentreprise($id)
	{
		include("config.php");
		$q=$db->prepare('select e.nom from produit p , entreprise e where p.id= :id and p.id_entreprise=e.id ');
		$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;

	}
	
	
	
	
public function affIdEntreprise($id)
	{
		include("config.php");
		$q=$db->prepare('select e.id from produit p , entreprise e where p.id= :id and p.id_entreprise=e.id ');
		$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;

	}
	
	
	


	public function Affproduit_rechercher_secteur($categorie,$prix_min,$prix_max,$id)
	
	{
	include("config.php");	
	$q=$db->prepare('select * from produit where id_categorie= :categorie and prix>= :prix_min and prix<= :prix_max and id_secteur= :id');
$q->execute(array(':categorie'=>$categorie,':prix_min'=>$prix_min,':prix_max'=>$prix_max,':id'=>$id));
	$donnees=$q->fetchAll();
    //affichage de la base de donnee
	return $donnees;
}
	
	





}
?>