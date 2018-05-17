<?php 
class panier{
	public $id;
	public $id_session;
	public $qte;
	public $prix;
	
	
	
	
public function	add_panier(panier $panier){
	
	include("config.php");
	$q=$db->prepare('insert into panier set id_session= :id_session,id_produit= :id_produit,qte= :qte,prix= :prix,statut= :statut');
	$q->bindValue(':id_session',$panier->id_session);
	$q->bindValue(':id_produit',$panier->id_produit);
	$q->bindValue(':qte',$panier->qte);
	$q->bindValue(':prix',$panier->prix);
	$q->bindValue(':statut',$panier->statut);
	$q->execute();
}
	


public function aff_panier($id_session){
	include("config.php");
	$q=$db->prepare('select * from panier where id_session= :id_session');
	$q->execute(array(':id_session'=>$id_session));
		$donnees=$q->fetchAll();   
	return $donnees;
		
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
	$donnees=$q->fetchAll();    //affichage de la base de donnee
	return $donnees;
}




public function aff_commande_entreprise($id){
	include("config.php");
	$q=$db->prepare('select pr.nom , pr.photo , pr.prix , p.statut from panier p , produit pr where p.statut="1" and p.id_produit=pr.id and pr.id_entreprise= :id  or p.statut="2" and p.id_produit=pr.id and pr.id_entreprise= :id ');
		$q->execute(array(':id'=>$id));
	$donnees=$q->fetchAll(); 
	return $donnees;
		
}



}


?>