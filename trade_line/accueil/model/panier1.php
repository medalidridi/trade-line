<?php 
class panier{
	public $id;
	public $id_session;
	public $qte;
	public $prix;
	
	
public function	add_panier(panier $panier){
	
	include("config.php");
	$q=$db->prepare('insert into panier set id_session= :id_session,id_produit= :id_produit,qte= :qte,prix= :prix,statut= :statut , commande= :commande');
	$q->bindValue(':id_session',$panier->id_session);
	$q->bindValue(':id_produit',$panier->id_produit);
	$q->bindValue(':qte',$panier->qte);
	$q->bindValue(':prix',$panier->prix);
	$q->bindValue(':statut',$panier->statut);
    $q->bindValue(':commande',$panier->commande);
	$q->execute();
}
	


public function affichepanier(){
	include("config.php");
	$q=$db->prepare('select * from panier ');
	$q->execute();
		$donnees=$q->fetch($db::FETCH_ASSOC);     
	return $donnees;
		
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





public function affclientbyid_panier($id_session)
	{
	include("config.php");	
	$q=$db->prepare('select c.nom from panier p , client c where p.id_client=c.id and id_session= :id_session');
	$q->execute(array(':id_session'=>$id_session));
	$donnees=$q->fetch($db::FETCH_ASSOC);     //affichage de la base de donnee
	return $donnees;
}




		public function Affproduit_panier($id_session)
	
	{
	include("config.php");	
	$q=$db->prepare('select pr.nom from produit pr , panier p where p.id_produit=pr.id and id_session= :id_session');
	$q->execute(array(':id_session'=>$id_session));
	$donnees=$q->fetchAll();   //affichage de la base de donnee
	return $donnees;
}



public function modif_commande(panier $panier)
	{
		include("config.php");
		
$q=$db->prepare('update  panier set type= :type where id_session= :session');
		
		$q->bindValue(':session',$panier->session);
		$q->bindValue(':type',$panier->type);
		
		$q->execute();

}


public function modif_livrasion(panier $panier)
	{
		include("config.php");
		
$q=$db->prepare('update  panier set livraison= :livraison where id_session= :session');
		
		$q->bindValue(':session',$panier->session);
		$q->bindValue(':livraison',$panier->livraison);
		
		$q->execute();

}



public function modif_statut(panier $panier)
	{
		include("config.php");
		
$q=$db->prepare('update  panier set statut= :statut, id_commande= :id_commande where id_session= :session');
		
		$q->bindValue(':session',$panier->session);
		$q->bindValue(':statut',$panier->statut);
		$q->bindValue(':id_commande',$panier->id_commande);
		
		$q->execute();

}

public function modifier_commande(panier $panier)
	{
		include("config.php");
		
$q=$db->prepare('update  panier set id_session= :id_session where id= :id');
		
		$q->bindValue(':id_session',$panier->id_session);
		$q->bindValue(':id',$panier->id);
		
		$q->execute();

}



public function ajout_commande(panier $panier)
	{
		include("config.php");
		 
$q=$db->prepare('update  panier set qte= :qte where id_session= :session');
		
		$q->bindValue(':session',$panier->session);
		$q->bindValue(':qte',$panier->qte);
		
		$q->execute();

}



}


?>