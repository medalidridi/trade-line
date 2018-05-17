
<?php
class message_client {
	public $id;
	public $id1;
	public $id2;
	public $nom;
	public $email;
	public $tel;
	public $msg;
	
public function envoyerMessage(message_client $message_client)
	
	{
		include("config.php");
		$q=$db->prepare('insert into message_client set nom= :nom ,email= :email  ,tel= :tel ,msg= :msg , id_client= :id_client, id_entreprise= :id_entreprise');
		
		$q->bindValue(':id_client',$message_client->id_client);
		$q->bindValue(':id_entreprise',$message_client->id_entreprise);
		$q->bindValue(':nom',$message_client->nom);
		$q->bindValue(':email',$message_client->email);
		$q->bindValue(':tel',$message_client->tel);
		$q->bindValue(':msg',$message_client->msg);
		$q->execute();
	}
	
	public function affMessageByid($id1)
	{
	include("config.php");	
	$q=$db->prepare('select * from message where id= :id1');
	$q->execute(array(':id1'=>$id1));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;
}



public function affreceptionByid($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from message where id_entreprise= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetchAll();     //affichage de la base de donnee
	return $donnees;
}

	
	
	}
	?>