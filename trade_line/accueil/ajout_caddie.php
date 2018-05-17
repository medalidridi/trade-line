<html>
<head>
</head>
<body>
<a href="ajout_caddie.php?ajout=<"echo $ref">>" >ajout </a>

<?php

session_start();                               //démarrage de la session  
$ref = $_GET['ajout'];                       //référence du produit choisi        
if(isset($ref )){                                   //si $ref n'est pas vide         
if(!isset($_SESSION['caddie'])){    //si le caddie n'a pas été encore créé
$_SESSION['caddie'] = array();       //création de la variable de session
 }
if(isset($_SESSION['caddie'][$ref ])) {      //si ce produit a déjà été choisi 
$_SESSION['caddie'][$ref ]++;                  //ajoute 1 a la quantité       
}else {
$_SESSION['caddie'][$ref ] = 1;                //si 1er ajout, met la quantité à 1  
}
}

?>

</body>
</html>