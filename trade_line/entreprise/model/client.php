<?php
class client {
	public $id;
	public $nom;
	public $prenom;
	public $photo;
	public $email;
	public $confmail;
	public $login;
	public $pwd;
	public $tel;
	public $adresse;
	public $civilite;
	public $dnc;
	
	public function Addclient(client $client)
	
	{
		include("config.php");
		$q=$db->prepare('insert into client set nom= :nom ,prenom= :prenom ,email= :email  ,login= :login ,pwd= :pwd ,tel= :tel ,adresse= :adresse ,civilite= :civilite ,dnc= :dnc');
		$q->bindValue(':nom',$client->nom);
		$q->bindValue(':prenom',$client->prenom);
		$q->bindValue(':email',$client->email);
		$q->bindValue(':login',$client->login);
		$q->bindValue(':pwd',$client->pwd);
		$q->bindValue(':tel',$client->tel);
		$q->bindValue(':adresse',$client->adresse);
		$q->bindValue(':civilite',$client->civilite);
		$q->bindValue(':dnc',$client->dnc);
		$q->execute();
	}
	
	public function Affclient()
	{
		include("config.php");
		$tab=array();
		$q=$db->prepare('select * from client');
		$q->execute();
		while ($donnees=$q->fetch($db::FETCH_ASSOC))
{
$tab[]=$donnees;}

if ($tab){
	return $tab;}
else 
	{ return; }

	}
	
	public function suppclientbyid($id)
{
	include("config.php");
	
	
	$q=$db->prepare('delete from client where id = :id');
	$q->execute(array(':id'=>$id));
}
	
	public function affclientbyid($id)
	{
		include("config.php");
		
		$q=$db->prepare('select * from client where id= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	
	return $donnees;
}


		
		public function modifclient(client $client)
	    {
		include("config.php");
        $q=$db->prepare('update client set nom= :nom ,prenom= :prenom ,telm= :telm ,telf= :telf ,adresse= :adresse ,ville= :ville ,code_postal= :code_postal ,pays= :pays ,description= :description  where id= :id');
		
		$q->bindValue(':id',$client->id);
		$q->bindValue(':nom',$client->nom);
		$q->bindValue(':prenom',$client->prenom);
		$q->bindValue(':telm',$client->telm);
		$q->bindValue(':telf',$client->telf);
		$q->bindValue(':adresse',$client->adresse);
		$q->bindValue(':ville',$client->ville);
		$q->bindValue(':code_postal',$client->code_postal);
		$q->bindValue(':pays',$client->pays);
		$q->bindValue(':description',$client->description);
		
		
		$q->execute();

}	




		
}
?>