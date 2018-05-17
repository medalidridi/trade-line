<?php
class produit {
	public $nom;
	public $prix;
	public $categorie;
	public $description;
	
	public function Addproduit(produit $produit)
	
	{
	include("config.php");
		$q=$db->prepare('insert into produit set nom= :nom ,prix= :prix ,id_categorie= :categorie ,description= :description');
		$q->bindValue(':nom',$produit->nom);
		$q->bindValue(':prix',$produit->prix);
		$q->bindValue(':categorie',$produit->categorie);
		$q->bindValue(':description',$produit->description);
		
		$q->execute();
	}
	
	public function Affproduit()
	{
		include("config.php");
				$q=$db->prepare('select * from produit');
		$q->execute();
		$donnees=$q->fetchAll();   //affichage de la base de donnee
	return $donnees;


	}
	
	public function suppproduitbyid($id)
{
	include("config.php");
	$q=$db->prepare('delete from produit where id = :id');
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
}
?>