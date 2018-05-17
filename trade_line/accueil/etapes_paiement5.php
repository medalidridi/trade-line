<html>
<?php $id=$_GET['id']; ?>
<link href="css/etape_paiement.css" rel="stylesheet" type="text/css">
<body>
<nav class="etapes">
<ul>
<li><a href="vuepanier.php"><img src="images/panier1.png"/ alt="" style="
    margin-left: -76%;
"></a></li>
<li><a href="identifiant.php"><img src="images/identifiant.png"/ alt="" style="
    margin-left: -337%;
"></a></li>

"></a></li>
<li><a href="adresse.php?id=<?php echo $id ?>"><img src="images/adresse.png"/ alt="" style="
    margin-left: -558%; margin-top:-23px;
"></a></li>
<li><a href="commande.php?id=<?php echo $id ?>"><img src="images/commande.png"/ alt="" style="
    margin-left: 330%;
    margin-top: -104px;
"></a></li>
<li><a href="paiement.php?id=<?php echo $id ?>"><img src="images/paiement_b.png"/ alt="" style="
    margin-left: 751px;
    margin-top: -193px;
"></a></li>

</ul>
</nav>
</body>
</html>