

                      <?php include("menu_connecte.php"); ?>

            



        <!-- global wrapper -->    
        <div id="globalWrapper">


            <!-- page content -->
            <section id="content" >

              



                <div class="container clearfix slideContactpage">
                    <div class="row">
                        <div id="contactinfoWrapperPage" class="clearfix">
                            <div class="span3">
                                <p>&nbsp;</p>
                            </div>

                            <!-- contact form -->
                            <div class="span6">
  <?php
$id=$_GET['id1'];
$u=new produit();
$res=$u->affproduitbyid($id);

?>
<form action="control/contmodif.php?id=<?php echo $res['id'];?>" method="post">
<table  border="0">

  
  <tr>
    <td>nom :</td>
    <td><input name="nom" type="text" class="form-control" id="nom" value="<?php echo $res['nom'];?>" /></td>
  </tr>
  <tr>
    <td>prix</td>
    <td><input type="text" name="prix"class="form-control" id="prix"  value="<?php echo $res['prix'];?>"/></td>
  </tr>
  <tr>
    <td>categorie</td>
    <td><input type="text" name="categorie"class="form-control" id="categorie" value="<?php echo $res['id_categorie'];?>"/></td>
  </tr>
  <tr>
    <td>description</td>
    <td><textarea name="description"class="form-control" cols="" rows=""><?php echo $res['description'];?></textarea></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="modifier"class="btn btn-primary" id="modifier" value="modifier" /></td>
  </tr>
</table>


</form>

                                <div id="message"></div>
                            </div>
                            <!-- contact form -->

                            <div class="span3">
                                <address>
                                    Address:<br/>
                                    Himalaya Company<br/>
                                    77 Mass. Ave., E14/E15<br/>
                                    Cambridge, MA 02139-4307 USA <br/>
                                    <br/>
                                    phone:<br/>
                                    615.987.1234<br/>
                                </address>
                                <h2>MAP</h2>
                            </div>
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
