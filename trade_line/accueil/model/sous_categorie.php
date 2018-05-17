<?php

class sousCategorie {
	
	public $nom;
	
  public function AddSousCategorie(sousCategorie $sousCategorie)
	
	{
	include("config.php");
		$q=$db->prepare('insert into sous_categorie set nom= :nom ');
      $q->bindValue(':nom',$sousCategorie->nom);
		$q->execute();
	} 
   
   
public function AffSousCategorie()
	{
		include("config.php");
		$tab=array();
		$q=$db->prepare('select * from sous_categorie');
		$q->execute();
		while ($donnees=$q->fetch($db::FETCH_ASSOC))
{
		$tab[]=$donnees;}
		if ($tab){
		return $tab;}
		else { return; }

	}
	
   
   public function suppSousCategoriebyid($id)
{
	include("config.php");
	$q=$db->prepare('delete from sous_categorie where id = :id');
	$q->execute(array(':id'=>$id));
}


	public function affSousCategoriebyid($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from sous_categorie  where id= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;
}


	public function modifSousCategorie(sousCategorie $sousCategorie)
	{
		include("config.php");
      $q=$db->prepare('update sous_categorie set nom= :nom where id= :id');
		
		$q->bindValue(':id',$sousCategorie->id);
		$q->bindValue(':nom',$sousCategorie->nom);
		$q->execute();


}


	public function affSousCategoriebycateg($id)
	{
		include("config.php");
		
		$q=$db->prepare('select * from sous_categorie where id_categorie= :id');
		$q->execute(array(':id'=>$id));
	$donnees=$q->fetchAll();   //affichage de la base de donnee
	return $donnees;
		

	}

}
?>