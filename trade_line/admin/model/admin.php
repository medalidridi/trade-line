<?php
class admin {
	public $id;
	public $login;
	public $pwd;
	
	public function AddAdmin(admin $admin)
	
	{
		include("config.php");
		$q=$db->prepare('insert into admin set login= :login ,pwd= :pwd');
		$q->bindValue(':login',$admin->login);
		$q->bindValue(':pwd',$admin->pwd);
		$q->execute();
	}
	
	public function Affadmin()
	{
		include("config.php");
		$tab=array();
		$q=$db->prepare('select * from admin');
		$q->execute();
		while ($donnees=$q->fetch($db::FETCH_ASSOC))
{
$tab[]=$donnees;}

if ($tab){
	return $tab;}
else 
	{ return; }

	}
	
	public function suppadminbyid($id)
{
	include("config.php");
	
	
	$q=$db->prepare('delete from admin where id = :id');
	$q->execute(array(':id'=>$id));
}
	
	public function affadminbyid($id)
	{
		include("config.php");
		
		$q=$db->prepare('select * from admin where id= :id');
	$q->execute(array(':id'=>$id));
	$donnees=$q->fetch($db::FETCH_ASSOC);    //affichage de la base de donnee
	
	return $donnees;
}
		
		public function modifadmin(admin $admin)
	{
		include("config.php");
        $q=$db->prepare('update admin set login= :login ,pwd= :pwd where id= :id');
		
		$q->bindValue(':id',$admin->id);
		$q->bindValue(':login',$admin->login);
		$q->bindValue(':pwd',$admin->pwd);
		$q->execute();

}	
		
}
?>