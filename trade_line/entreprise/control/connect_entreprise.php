<?php session_start();
$_SESSION['start']='oui';
$login=$_POST["login"];
$pwd=$_POST["pwd"];
include("../config.php");

if (($login == "") or ($pwd == "")) {
    echo "<script language='javascript'>alert('veuillez saisir un login et un mot de passe'),parent.location.href='../connexion_entreprise.php'</script>";
}
else {
    $st = $db->query("SELECT COUNT(*) FROM entreprise WHERE login='$login' AND pwd='$pwd'")->fetch();
    if ($st['COUNT(*)'] == 1){
				
	include("../config.php");							
		
		$sql="select * from entreprise WHERE login='$login' AND pwd='$pwd'";
		$req=$db->query($sql);
		while ($row=$req->fetch())
		{
		$id=$row['id'];	
		$_SESSION['id']=$id;	
		}
        header("Location: ../profil_entreprise.php?id=$id");}
		else  { echo "<script language='javascript'>alert(' login ou mot de passe incorrect'),parent.location.href='../connexion_entreprise.php'</script>";}
}

?>