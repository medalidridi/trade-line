<?php
class entreprise {
	public $nom;
	public $login;
	public $pwd;
	public $email;
   public $description;
   public $tel;
   public $adresse;
   public $logo;
   
   
   public function Addentreprise(entreprise $entreprise)
	
	{
	include("config.php");
		$q=$db->prepare('insert into entreprise set nom= :nom ,nomprop= :nomprop ,numtva= :numtva ,rc= :rc ,login= :login ,pwd= :pwd ,email= :email ,description= :description ,tel= :tel ,adresse= :adresse,id_secteur= :id_secteur ');
		$q->bindValue(':nom',$entreprise->nom);	
		$q->bindValue(':nomprop',$entreprise->nomprop);	
		$q->bindValue(':numtva',$entreprise->numtva);	
		$q->bindValue(':rc',$entreprise->rc);		
		$q->bindValue(':login',$entreprise->login);	
		$q->bindValue(':pwd',$entreprise->pwd);
      $q->bindValue(':email',$entreprise->email);
		$q->bindValue(':description',$entreprise->description);
      $q->bindValue(':tel',$entreprise->tel);
      $q->bindValue(':adresse',$entreprise->adresse);
	  $q->bindValue(':id_secteur',$entreprise->secteur);
	  
		$q->execute();
	}
	
   public function Affentreprise()
	{
		include("config.php");
		$tab=array();
		$q=$db->prepare('select * from entreprise');
		$q->execute();
		while ($donnees=$q->fetch($db::FETCH_ASSOC))
{
		$tab[]=$donnees;}
		if ($tab){
		return $tab;}
		else { return; }

	}
	
	public function suppentreprisebyid($id)
{
	include("config.php");
	$q=$db->prepare('delete from entreprise where id = :id');
	$q->execute(array(':id'=>$id));
}
	
	public function affentreprisebyid($id)
	{

	include("config.php");	
	$q=$db->prepare('select * from entreprise where id= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;
	
}


	public function modifentreprise(entreprise $entreprise)
	{
		include("config.php");
$q=$db->prepare('update  entreprise set nom= :nom ,pwd= :pwd ,pwd= :pwd ,email= :email ,description= :description ,tel= :tel ,adresse= :adresse ');
		
		$q->bindValue(':nom',$entreprise->nom);
		
		$q->bindValue(':pwd',$entreprise->pwd);
      $q->bindValue(':email',$entreprise->email);
		$q->bindValue(':description',$entreprise->description);
      $q->bindValue(':tel',$entreprise->tel);
      $q->bindValue(':adresse',$entreprise->adresse);
     
		$q->execute();

}
}
?>