<?php include("menu.php"); ?>

<?php include("etapes_paiement.php"); ?>


<script language="javascript">

function ajout(i,a) {
var i2 = i + 1;
document.getElementById('plus'+a).innerHTML = '<a href="javascript:ajout('+i2+','+a+')">Ajouter +</a><input type="text" name="compte" value="'+i2+'" size="4" maxlength="5"><a href="javascript:moins('+i2+','+a+')">moins -</a>';
}
function moins(i,a)
{
    var i2 = i - 1;
    if(i2<1)
    {
        i2=0;
        document.getElementById('plus'+a).innerHTML = '<a href="javascript:ajout('+i2+','+a+')">Ajouter +</a><input type="text" name="compte" value="'+i2+'" size="4" maxlength="5">';
    }
    else
    {
        document.getElementById('plus'+a).innerHTML = '<a href="javascript:ajout('+i2+','+a+')">Ajouter +</a><input type="text" name="compte" value="'+i2+'" size="4" maxlength="5"><a href="javascript:moins('+i2+','+a+')">moins -</a>';
    }
}

function safouane(){
	
	var valqte = parseInt(document.getElementById("safsaf").value); 
	var prix = parseInt(safoun.innerText);
	
	var prixqte = valqte * prix;
	document.getElementById("prixtt").innerHTML = prixqte ;

	}
</script>
   
   
      </div>
      <div class="widget-content">
        <div class="table-responsive">
        
          <table class="table table-bordered table-hover" style="width: 75.5%;margin-left: 153px;"  >
          <tbody>
          </tbody>
          <thead>
            <tr>
              <th><center>Photo</center></th>
              <th><center>Nom</center></th>
              <th><center>Quantite</center></th>              
              <th style="width: 15%;"><center>Prix</center></th>
              <th style="
    width: 9%;
"><center>Edition</center></th>
            </tr>
          </thead>
          <tbody>
          
          <form method="post" action="control/update.php" align="right">

<?php
include("model/panier1.php");
$id_session=session_id();
$p= new panier();
$resi=$p->aff_panier($id_session);

for($j=0;$j<count($resi);$j++){
	
	$id_p=$resi[$j]['id_produit'];
 
?>

<?php 

$u= new produit();
$product=$u->aff_produitB($id_p);

for($i=0;$i<count($product);$i++){

	?>



            <tr>
              
              <td><img src="../entreprise/produit/<?php echo $product[$i]['photo'];?>" width="100" height="80"></td>
              <td><?php echo $product[$i]['nom']; ?></td>
              <form action="control/update.php" name="ff" >
            
              <td><input type="number" name="qte" value="1" min="1" max="50" id="dali" onchange="bakha.value = dali.value * <?php echo $resi[$j]['prix']; ?>" style="width: 30%;" /></td>
              <td ><input value="<?php echo number_format ($resi[$j]['prix'],2,',',''); ?>$" id="bakha" disabled/></td>
              <td class="text-right">
               
              <a href="control/supp_produit_panier.php?id=<?php echo $resi[$j]['id']; ?>" >
              <span class="iconWrapper iconLink"><i class="icon-trash"></i></span> </a></td>
              </form>
            </tr>
          
          <?php }} ?>
          
          
          
          </tbody>
          <tbody>
          </tbody>
          </table>
            <h3 align="right" style="margin-right: 12.5%;"><?php echo $prixs; ?>$</h3>
            
            
</form>

            <form method="post" action="identifiant.php" align="right" >
            
<ul>

<li><Button type="submit" name="connexion" class="btn btn-3d btnSmall" style="margin-right: 12.3%;margin-top: -1%;">
<span> 

Valider
<i class="icon-right-open right">
</i>
</span>
</Button>
</li>
</ul> 
</form>   
 </div>
                    
 </div>
<?php include("footer.php"); ?>
        </div>
        <!-- global wrapper -->

        <!-- End Document 
        ================================================== -->

        <script type="text/javascript" src="js-plugin/respond/respond.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

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