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

                    </div>
                </div>
            </div>
        </header>
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
 <?php
$id=$_GET['id'];
include("model/message.php");
$u=new message();
$res=$u->affreceptionByid($id);

?>
<table class="table table-bordered table-hover"   >
        
          <thead>
            
            <tr>
              <th><center>Nom</center></th>
              <th><center>email</center></th>            
            </tr>
          </thead>
          <tbody>


                                <form method="post" action="#" >

                                      <?php
  for($i=0;$i<count($res);$i++)
  {
	  
  
  ?>
                                                                                                                                                                 <tr> 
                                                                                                                                                                                                                                                                                    <td><a href="msg_entreprise.php?id=<?php echo $id;?>&id1=<?php echo $res[$i]['id']; ?>"><?php echo $res[$i]['nom'];?></a></td>
                                    
    
                                    
                                    
                                   <td> <a href="msg_entreprise.php?id=<?php echo $id;?>"><?php echo $res[$i]['email'];?></a></td>
                                    
                                    </tr>
                                             

                                     

                                </form>
                                
                                <?php } ?>
</tbody></table>
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

 <div class="widget-content">
        <div class="table-responsive">
        
          