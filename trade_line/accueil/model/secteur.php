<?php
class secteur {
	
	public $nom;
	
  public function Addsecteur(secteur $secteur)
	
	{
	include("config.php");
		$q=$db->prepare('insert into secteur set nom= :nom ');
      $q->bindValue(':nom',$secteur->nom);
		$q->execute();
	} 
   
   
public function Affsecteur()
	{
		include("config.php");
		$tab=array();
		$q=$db->prepare('select * from secteur');
		$q->execute();
		while ($donnees=$q->fetch($db::FETCH_ASSOC))
{
		$tab[]=$donnees;}
		if ($tab){
		return $tab;}
		else { return; }

	}
	   
   public function suppsecteurbyid($id)
{
	include("config.php");
	$q=$db->prepare('delete from secteur where id = :id');
	$q->execute(array(':id'=>$id));
}


	public function affsecteurbyid($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from secteur where id= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;
}


	public function modifsecteur(secteur $secteur)
	{
		include("config.php");
      $q=$db->prepare('update  secteur set nom= :nom where id= :id');
		
		$q->bindValue(':id',$secteur->id);
		$q->bindValue(':nom',$secteur->nom);
		$q->execute();

}
}
?>