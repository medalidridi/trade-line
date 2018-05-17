
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
	
	public function affMessageByid($id2)
	{
	include("config.php");	
	$q=$db->prepare('select * from message_client where id= :id2');
	$q->execute(array(':id2'=>$id2));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	return $donnees;
}

public function affreceptionByid($id)
	{
	include("config.php");	
	$q=$db->prepare('select * from message_client where id_client= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetchAll();       //affichage de la base de donnee
	return $donnees;
}

	
	
	}
	?>