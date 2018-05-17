<?php
class categorie {
	
	public $nom;
	
	
	
	
  public function Addcategorie(categorie $categorie)
	
	{
	include("config.php");
		$q=$db->prepare('insert into categorie set nom= :nom ');
      $q->bindValue(':nom',$categorie->nom);
		$q->execute();
	} 
   
   
public function Affcategorie()
	{
		include("config.php");
		$tab=array();
		$q=$db->prepare('select * from categorie');
		$q->execute();
		while ($donnees=$q->fetch($db::FETCH_ASSOC))
{
		$tab[]=$donnees;}
		if ($tab){
		return $tab;}
		else { return; }

	}

   
   public function suppcategoriebyid($id)
{
	include("config.php");
	$q=$db->prepare('delete from categorie where id = :id');
	$q->execute(array(':id'=>$id));
}


	public function affcategoriebyid($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from categorie  where id= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;
}


	public function modifcategorie(categorie $categorie)
	{
		include("config.php");
      $q=$db->prepare('update  categorie set nom= :nom where id= :id');
		
		$q->bindValue(':id',$categorie->id);
		$q->bindValue(':nom',$categorie->nom);
		$q->execute();

}

public function affcategoriebyidsec($id)
	{
		include("config.php");
		
		$q=$db->prepare('select * from categorie where id_secteur= :id');
		$q->execute(array(':id'=>$id));
	$donnees=$q->fetchAll();   //affichage de la base de donnee
	return $donnees;
		

	}

}
?>