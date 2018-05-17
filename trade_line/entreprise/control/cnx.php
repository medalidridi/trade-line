<?php session_start();
$_SESSION['start']='oui';
$email=$_POST["email"];
$pwd=$_POST["pwd"];
include("../config.php");

if (($email == "") or ($pwd == "")) {
    echo "<script language='javascript'>alert('veuillez remplier les champs'),parent.location.href='../identifiant.php'</script>";
}
else {
    $st = $db->query("SELECT COUNT(*) FROM client WHERE email='$email' AND pwd='$pwd'")->fetch();
    if ($st['COUNT(*)'] == 1){
				
	include("../config.php");							
		
		$sql="select * from client WHERE email='$email' AND pwd='$pwd'";
		$req=$db->query($sql);
		while ($row=$req->fetch())
		{
		$id=$row['id'];	
		$_SESSION['id']=$id;	
		}
        header("Location: ../adresse.php?id=$id");}
		else  { echo "<script language='javascript'>alert('veuillez saisir un email et un mot de passe'),parent.location.href='../adresse.php'</script>";}
}

?>