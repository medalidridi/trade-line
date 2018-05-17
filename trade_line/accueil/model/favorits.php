<?php 
class favorits{
	public $id;
	public $id_session;
	public $qte;
	public $prix;
	
	
public function	add_favorits(favorits $favorits){
	
	include("config.php");
	$q=$db->prepare('insert into favorits set id_client= :id_client, id_produit= :id_produit');
	$q->bindValue(':id_client',$favorits->id_client);
	$q->bindValue(':id_produit',$favorits->id_produit);
	
	$q->execute();
}
	


public function afffavoritsbyid($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from favorits f , produit p where f.id_client= :id and f.id_produit=p.id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetchAll();    //affichage de la base de donnee
	return $donnees;
}



}


?>