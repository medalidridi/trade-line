<?php session_start();
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
parent.location.href='connexion_client.php'</script>";	
}
?>



                       <?php include("menu_connecte.php"); ?>

                    </div>
                </div>
            </div>
        </header>
        <!-- header --> 



        <!-- global wrapper -->    
        <div id="globalWrapper">


            <!-- page content -->
            <section id="content" >

                <?php include("menu_client.php"); ?>



                <div class="container clearfix slideContactpage">
                    <div class="row">
                        <div id="contactinfoWrapperPage" class="clearfix">
                            <div class="span3">
                                <p>&nbsp;</p>
                            </div>

                            <!-- contact form -->
                            <div class="span6">
 <?php
$id=$_GET['id'];
$id1=$_GET['id1'];
$id2=$_GET['id2'];
include("model/message_client.php");
$u=new message_client();
$ress=$u->affMessageByid($id2);

?>

                                <form method="post" action="msg_reponse.php?id=<?php echo $id ?>&id1=<?php echo $id1?>&id2=<?php echo $ress['id_entreprise']; ?> " >

                                    
                                                                                                                                                                                                                                                                                          <input type="text" name="nom" id="name" value="<?php echo $ress['nom'];?>" class="" placeholder="nom" required/>
                                    
    
                                    
                                    
                                    <input type="text" name="email" id="email" value="<?php echo $ress['email'];?>" class="" placeholder="e-mail" required/>
                                    
                                    
                                                 <input name="tel" type="text" id="phone" size="30"  value="<?php echo $ress['tel'];?>" placeholder="tel"/>
                                    
                                    
                                 
                                    <textarea name="msg" id="msg" cols="3" rows="5" readonly/><?php echo $ress['msg'];?></textarea>
                                    



                                    <button name="repondre" type="submit" class="btn" id="submit"> repondre</button>

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
