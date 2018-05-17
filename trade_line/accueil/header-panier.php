<?php 
include("db.php");
$DB = new DB(); ?>

<?php  
include("model/panier.php");
$panier = new panier($DB); ?>