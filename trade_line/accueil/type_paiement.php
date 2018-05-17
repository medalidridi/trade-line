<?php session_start();
if (isset($_SESSION['id']))
{
$id=$_SESSION['id'];

}
else
{
echo "<script language='javascript'> 
parent.location.href='identifiant.php'</script>";	
}
?>
<?php include("menu_connecte.php"); ?>
<?php include("etapes_paiement4.php"); ?>



                    </div>
                </div>
            </div>
        </header>
        <!-- header --> 
       
<div class="popupbg"></div>
<div class="popupbox">

</div>

<?php $id=$_GET['id']; 
$id_session=session_id();
?>
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


                                <form action="control/modif_livraison1.php?id=<?php echo $id; ?>" method="post">

                                    
                                     <h3 class="page-subheading">choisissez votre methode de paiement </h3>                                                                                                                                                            
                                            <table>
                                       
                              <tr><td>               
           <p><label for="livraison"> </label> <input type="radio" name="livraison" value="livraison par poste " id="livraison"  class=""/> &nbsp;livraison par poste </p> 
             </td><td>
         <i class="icon-truck" style="
    font-size: 300%;
    margin-left: 38px;
"></i></td>
<input type="hidden" name="session" value="<?php echo $id_session?>"/>
</tr>


<tr><td>               
           <p><label for="livraison"> </label> <input type="radio" name="livraison" value="Envoyer cadeau" id="livraison"  class=""/> &nbsp;Envoyer cadeau </p> 
             </td><td>
         <i class="icon-gift" style="
    font-size: 300%;
    margin-left: 38px;
"></i></td></tr>
                         
</table>
                          
                                                     <ul>


<li> <Button type="reset" name="reset" class="btn btn-3d btnSmall" style="margin-left: 224px;" >
<span> 
<a href="commande.php?id=<?php echo $id ?>"> Annuler</a>
<i class="icon-cancel-circle right">
</i>
</span>
</Button>
</li>
</ul> <ul>

<li> <Button type="submit" name="enregistrer" class="btn btn-3d btnSmall" style="margin-left: 73%;margin-top: -92px;" >
<span> 
Enregistrer
<i class="icon-ok-circle right">
</i>
</span>
</Button>
</li>
</ul>



                                   
  
               
                                      
        

                                </form>

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
