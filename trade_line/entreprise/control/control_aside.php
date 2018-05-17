<?php
include_once('modele/categorie.php');
 $donnees = affcategoriebyidsec($id); 
 foreach($donnees as $cle => $billet) 
 {   
  $donnees[$cle]['nom'] = htmlspecialchars($billet['nom']);    
   }  
 include_once('aside.php');