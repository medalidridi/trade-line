<?php
class secteur {
	
	public $nom;
	

	public function Affsecteur($id)
	{
		include("config.php");
		
		$q=$db->prepare('select * from categorie where id_secteur= :id');
		$q->execute(array(':id'=>$id));
	$donnees=$q->fetchAll();   //affichage de la base de donnee
	return $donnees;
		

	}
	
	}
?>