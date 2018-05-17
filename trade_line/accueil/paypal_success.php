<?php 
include("menu.php");
$session=session_id();
$id_session=session_id();
$id_commande=session_id();

include("model/panier1.php");
include("model/commande.php");
include("config.php");
    $id_client=$_GET['id_client'];
	
	
	
 
	
$u=new panier();

$u->session=$session;
$u->statut="1";
$u->id_commande=$id_commande;

$u->modif_statut($u) ;


$db->query("insert into commande select * from panier");







$id_session=$_GET['id_client'];
$u=new panier();
$res=$u->affclientbyid_panier($id_session);

?>
<html>
   <head>
       <title>Succees de payement </title>
       </head>
       
       <body>
       
       <h2> Bienvenue <?php echo $res['nom']; ?></h2><br>
       <h1 style="color:#777"> Votre paiement est validée </h1>
       
       

        <form method="post" action="facture.php?id_client=<?php echo $id_session; ?>" align="right" >
            
<ul>

<li><Button type="submit" name="connexion" class="btn btn-3d btnSmall" style="margin-right:88%;">
<span> 

Obtenir facture
<i class="icon-right-open right">
</i>
</span>
</Button>
</li>
</ul> 
</form> 

</a></h3>
       
       
       
       
       
       
       </body>
       </html>
    <?php   include("footer.php"); ?>