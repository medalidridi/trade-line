<?php session_start();
$_SESSION['start']='oui';
$login=$_POST["login"];
$pwd=$_POST["pwd"];
include("../config.php");

if (($login == "") or ($pwd == "")) {
    echo "<script language='javascript'>alert('veuillez remplier les champs'),parent.location.href='../connexion_client.php'</script>";
}
else {
    $st = $db->query("SELECT COUNT(*) FROM client WHERE login='$login' AND pwd='$pwd'")->fetch();
    if ($st['COUNT(*)'] == 1){
				
	include("../config.php");							
		
		$sql="select * from client WHERE login='$login' AND pwd='$pwd'";
		$req=$db->query($sql);
		while ($row=$req->fetch())
		{
		$id=$row['id'];	
		$_SESSION['id']=$id;	
		}
		$id_session=$_SESSION['id'];
		
        header("Location: ../profil_client.php?id=$id_session");}
		else  { echo "<script language='javascript'>alert('veuillez saisir un login et un mot de passe'),parent.location.href='../connexion_client.php'</script>";}
}

?>