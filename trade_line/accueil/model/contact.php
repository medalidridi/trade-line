<?php
class contact
{
   public $nom;
   public $prenom;
   public $email;
   public $message;
public function addcontact(contact $contact)
{
	include("../config.php");
	$q=$db->prepare('insert into contact set nom= :nom ,prenom= :prenom ,email= :email ,message= :message');
	$q->bindValue(':nom',$contact->nom);
	$q->bindValue(':prenom',$contact->prenom);
	$q->bindValue(':email',$contact->email);
	$q->bindValue(':message',$contact->message);
	$q->execute();
	
} 
}
?>