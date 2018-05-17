<?php include("menu_connecte_c.php"); ?>
<?php include("menu_secteur.php"); ?>
<?php $id_client=$_GET['id_client']; ?>



   
   
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
                       
              <th style="width: 15%;"><center>Prix</center></th>
              <th style="
    width: 9%;
"><center>Edition</center></th>
            </tr>
          </thead>
          <tbody>
          
          <form method="post" action="control/update.php" align="right">


     <?php
$categorie=$_GET['categorie'];
$prix_min=$_GET['prix_min'];
$prix_max=$_GET['prix_max'];
$id=$_GET['id'];
	 
	
	 
	 
$U=new produit();
$res=$U->Affproduit_rechercher_secteur($categorie,$prix_min,$prix_max,$id);

?>
            <?php
  for($i=0;$i<count($res);$i++)
  {
	  
  
  ?>



            <tr>
              
              <td><img src="../entreprise/produit/<?php echo $res[$i]['photo']; ?>" width="100" height="80"></td>
              <td><?php echo $res[$i]['nom']; ?></td>
              <form action="control/update.php" name="ff" >
            
              
              <td ><input value="<?php echo number_format ($res[$i]['prix'],2,',',''); ?>$" id="bakha" disabled/></td>
              <td class="text-right">
               
              <a href="control/supp_produit_panier.php?id=<?php echo $res[$i]['id']; ?>" >
              <span class="iconWrapper iconLink"><i class="icon-trash"></i></span> </a></td>
              </form>
            </tr>
          
          <?php } ?>
          
          
          </tbody>
          <tbody>
          </tbody>
          </table>
          
            
            
</form>

            <form method="post" action="identifiant.php" align="right" >
            

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