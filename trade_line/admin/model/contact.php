<?php
class contact {
	public $nom;
	public $prenom;
	public $telephone;
	public $email;
	public $adresse;
	public $sujet;
	public $message;
	
	public function Addcontact(contact $contact)
	
	{
	include("config.php");
		$q=$db->prepare('insert into contact set nom= :nom ,prenom= :prenom ,telephone= :telephone ,email= :email ,adresse= :adresse ,sujet= :sujet, message= :message');
		$q->bindValue(':nom',$contact->nom);
		$q->bindValue(':prenom',$contact->prenom);
		$q->bindValue(':telephone',$contact->telephone);
		$q->bindValue(':email',$contact->email);
		$q->bindValue(':adresse',$contact->adresse);
		$q->bindValue(':sujet',$contact->sujet);
		$q->bindValue(':message',$contact->message);
		$q->execute();
	}

}
	
?>