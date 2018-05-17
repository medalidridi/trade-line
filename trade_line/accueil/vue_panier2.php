  
<?php   
  
include ("config.php" ); 
  
//passage des variables en variables courtes 
$login = $_POST['login']; 
$pass = $_POST['pass']; 
  
// On selectionne quand le champ login correspond au login entré 
// et le champ passe au pass entré. 
$sql = "SELECT * FROM liste_membres WHERE login='$login' and pass=sha1('$pass')"; 
  
// On execute la requête de selection 
$resultat = mysql_query($sql); 
  
// On compte le nombre de ligne des resultats 
// 1 : si valide ou 0 si aucun login ne correspond 
$exist = mysql_numrows($resultat); 
  
// Si la variable $exist = 0 --> login inexistant ou mauvais mot de passe 
if(!$exist) { 
    // On affiche ce message d'erreur 
    echo "<h1>Veuillez vérifier vos données</h1>"; 
      
    // On inclut le formulaire d'identification 
    
} 
  
// Sinon, si le login et pass sont valides 
else { 
  
 // On ouvre la session 
 session_start(); 
  
 // On enregistre la variable login qu'on fera passer sur ttes les pages 
 session_register("login" ); 
  
 //on incremente la variable de session avec la valeur entrée par l'utilisateur dans le formulaire 
 $_SESSION['login']=$login; 
  
 //On incrémente la table historique des connexions 
  
 $sql = "SELECT * FROM historique_connectes WHERE login='$login' "; 
  
 // On execute la requête de selection 
 $resultat = mysql_query($sql); 
  
 // On compte le nombre de ligne des resultats 
 // 1 : si valide ou 0 si aucun login ne correspond 
 $exist = mysql_numrows($resultat); 
}
 // On affiche 
 ?> 









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" > 
   <head> 
       <title>ACCUEIL</title> 
       <link href="styles/membres.css" rel="stylesheet" type="text/css"> 
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
   </head> 
   <body> 
    
<div id="en_tete"> 
    
</div> 
  

</div> 
  
<div id="corps"> 
ICI mon site 
  
</div> 
  
<div id="pied_de_page"> 
</div> 
  
  
 <?php // Si la variable $exist = 0 --> le login se connecte pour la premiere fois 
 if(!$exist) 
  {    // On incrémente la table 
    
  echo "<h1>Ceci est votre premiere connexion!</h1>"; 
  $sql = "INSERT INTO historique_connectes VALUES('$login',now(),curtime(),'1')"; 
  mysql_query($sql); 
  } 
 else 
  { 
  $sql="select * from historique_connectes where login='$login'"; 
  $resultat=mysql_query($sql); 
  $historique = mysql_fetch_array($resultat); 
  $nombre=++ $historique['nombre']; //On incrémente le nombre de connexion  de 1 à chaque connexion 
  $jour=$historique['date']; //Variables courtes 
  $heure=$historique['heure']; 
  echo "<div class='centre'><p>Votre derniere connexion était le $jour à $heure. <br />"; 
  echo "Ceci est votre $nombre ème connexion à mon site ouaib.</p></div>"; 
    
  $sql="UPDATE historique_connectes SET date=now(),heure=curtime(), nombre='$nombre' WHERE login='$login'"; 
  mysql_query($sql); 
   
  
}//fermeture du else ou le login et pass sont valides 
?>