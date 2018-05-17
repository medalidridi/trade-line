<?php 
session_start();
if (isset($_SESSION['id']))
{

	$identifiant=$_GET['id'];
	$id=session_id();
	
if($identifiant != $_SESSION['id']){
		echo "<script language='javascript'> 
parent.location.href='connexion_client.php'</script>";
		
		}



}
else
{
echo "<script language='javascript'> 
parent.location.href='identifiant.php'</script>";	
}
?>
<?php include("menu_connecte.php"); ?>
<?php include("etapes_paiement5.php"); ?>

<div align="center">
<h2 align="center" style="margin-right: 34%;"> payer avec paypal: </h2>
<?php
include("model/panier1.php");
$id_session=session_id();
$id_client=$_GET['id'];
$p= new panier();
$resi=$p->aff_panier($id_session);

for($j=0;$j<count($resi);$j++){
	
	$id_p=$resi[$j]['id_produit'];
	

?>

<?php 

 $z=new produit();
		   $resultat=$z->affproduitpaiement($id_session);

$u= new produit();
$product=$u->aff_produitB($id_p);
$prixtotal=$prixs+10.5;
$tvatot=($prixs*18)/100 ;
  $prixttc=$tvatot+$prixs+0.5;

for($x=0;$x<count($resultat);$x++){?>


<form action="https://www.sandbox.paypal.com/cgi-bin/webscr?id_client=<?php echo $id_client; ?>" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="shark.delta.team@hotmail.fr">

<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="<?php echo $resultat[$x]['nom']; ?>">
<input type="hidden" name="amount" value="<?php echo $prixttc; ?>">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="quantite" value="<?php echo $qte; ?>">

<input type="hidden" name="return" value="http://localhost/trade_line/accueil/paypal_success.php?id_client=<?php echo $id_session; ?>"/>
<input type="hidden" name="cancel_return" value="http://www.onlinetuting.com/myshop/paypal_cancel.php"/>


<?php }} ?>
<!-- Display the payment button. -->
<input type="image" name="submit" border="0"
src="images/paiement/paypal1.jpg" 
alt="PayPal - The safer, easier way to pay online" style="margin-top: -5%;">
<img alt="" border="0" width="1" height="1"
src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>



<table border="1px solid">
       <thead>
       <tr>
       <th>Produits</th>
       <th>Prix unitaire</th>
       <th>Total produits H.T</th>
       <th>Frais de timbre</th>
       <th>Frais TVA (18%)</th>   
       <th>Total</th> 
       </tr>  
		</thead>
        <tbody>
        <tr>
        <td>   
		   <?php
		  
		   
		    for($i=0;$i<count($resultat);$i++){?>
           
           <?php echo $i+1; ?> : <?php echo $resultat[$i]['nom']; ?> : 
           <br>
           <?php } ?> </td>
           
           <td>
		     <?php for($i=0;$i<count($resultat);$i++){
		    echo $resi[$i]['prix'];?><br> <?php }?></td>
           
           <td><?php echo $prixs; ?></td>
           <td> 0.5 $</td>
          <td><?php echo $tvatot; ?></td>
          <td><?php 
		   echo $prixttc
		    ?></td>
            </tr>
            </tbody>
       
                                
                                
                                
                                </table>
<br><br>


</div>
<?php include("footer.php"); ?>

<script type="text/javascript" src="js-plugin/respond/respond.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>


        <!-- third party plugins  -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap-carousel.js"></script>
        <script type="text/javascript" src="js-plugin/seaofclouds-tweet/tweet/jquery.tweet.js"></script>
        
        <script type="text/javascript" src="js-plugin/ajax-contact-extend/assets/js/jquery.jigowatt.js"></script>

        <!-- Custom  -->
        <script type="text/javascript" src="js/custom.js"></script>
        
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', UA]);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
    </body>
</html>

 