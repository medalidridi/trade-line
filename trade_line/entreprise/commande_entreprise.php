<?php session_start();
if (isset($_SESSION['id']))
{
$id=$_SESSION['id'];
}
else
{
echo "<script language='javascript'> 
parent.location.href='connexion_entreprise.php'</script>";	
}
?>

 <?php include("menu_connecte.php"); ?>

   
        <!-- header --> 



        <!-- global wrapper -->    
        <div id="globalWrapper">


            <!-- page content -->
            <section id="content" >


<?php include("menu_entreprise.php"); ?>



                <div class="container clearfix slideContactpage">
                    <div class="row">
                        <div id="contactinfoWrapperPage" class="clearfix">
                            <div class="span3">
                                <p>&nbsp;</p>
                            </div>

                            <!-- contact form -->
                            <div class="span6">
                            


                    <table class="table table-bordered table-hover">
          <tbody>
          </tbody>
          <thead>
            <tr>
              <th><div class="checkbox">
               
              </div></th>
              <th>Photo</th>
              <th>Nom</th>
              <th>Prix</th>
              <th style="width: 40%;">Statut</th>
            </tr>
          </thead>
          <tbody>
            <?php
			include("model/panier1.php"); 
			

$id=$_GET['id'];

$U=new panier();
$res=$U->aff_commande_entreprise($id);

?>
            <?php
  for($i=0;$i<count($res);$i++)
  {
	  
  
  ?>
            
            <tr>
              <td><div class="checkbox">
                <input type="checkbox">
              </div></td>
              <td><img src="produit/<?php echo $res[$i]['photo']; ?>" width="100" height="80"></td>
              <td><?php echo $res[$i]['nom']; ?></td>
              <td><?php echo $res[$i]['prix']; ?></td>
              <td><?php 
			  if ( $res[$i]['statut']=="1")
			{ ?>
            
            <img src="images/statut1.png" width="110px" height="50px"  />
				
				<?php } ?>
                
                <?php if ( $res[$i]['statut']=="2") { ?>
                
                <img src="images/statut2.png" width="110px" height="50px"  />
				<?php } ?></td>
            </tr>
            <?php } ?>
          </tbody>
          <tbody>
          </tbody>
          </table>

                                <div id="message"></div>
                            </div>
                            <!-- contact form -->

                           
                        </div>
                        <div class="span12"  id="mapSlideWrapper">
                            <div id="mapWrapper"></div>
                            <a href="" title="" id="mapReturn"><i class="icon iconReturn"></i> back</a> 
                        </div>
                    </div>
                </div>

            </section>
            <!-- page content -->




            <!-- footer -->
           <?php include("footer.php"); ?>
            <!-- footer -->



        </div>
        <!-- global wrapper -->

        <!-- End Document 
        ================================================== -->

        <script type="text/javascript" src="js-plugin/respond/respond.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>


        <!-- third party p/lugins  -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="textjavascript" src="bootstrap/js/bootstrap-carousel.js"></script>
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
