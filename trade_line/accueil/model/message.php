
<?php
class message {
	public $id;
	public $id1;
	public $nom;
	public $email;
	public $tel;
	public $msg;
	
public function envoyerMessage(message $message)
	
	{
		include("config.php");
		$q=$db->prepare('insert into message set nom= :nom ,email= :email  ,tel= :tel ,msg= :msg , id_client= :id_client, id_entreprise= :id_entreprise');
		$q->bindValue(':id_client',$message->id_client);
		$q->bindValue(':id_entreprise',$message->id_entreprise);
		$q->bindValue(':nom',$message->nom);
		$q->bindValue(':email',$message->email);
		$q->bindValue(':tel',$message->tel);
		$q->bindValue(':msg',$message->msg);
		$q->execute();
	}
	
	public function affMessageByid($id1)
	{
	include("config.php");	
	$q=$db->prepare('select * from message_client where id_client= :id');
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