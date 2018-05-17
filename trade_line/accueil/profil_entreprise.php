<?php session_start();
if (isset($_SESSION['id']))
{
$id=$_SESSION['id'];
}
else
{
echo "<script language='javascript'> 
parent.location.href='connection.php'</script>";	
}
?>


                       <?php include("menu_connect_entreprise.php"); ?>

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

include("model/entreprise.php");
$u=new entreprise();
$res=$u->affentreprisebyid($id);

?>
                                <form method="post" action="control/modif_profil.php" >

                                    
                                                                                                                                                                <input type="text" name="nom" id="name" value="<?php echo $res['nom'];?>" class=""/>
                                    
                                   
                                    
                                   
                                    <input type="password" name="pwd" id="pwd" value="<?php echo $res['pwd'];?>" class=""/>
                                    
                                    
                                    <input type="text" name="email" id="email" value="<?php echo $res['email'];?>" class=""/>
                                    
                                 
                                    <textarea name="description" id="description" cols="3" rows="5"  value="<?php echo $res['description'];?>"></textarea>
                                    


                                   
                                    <input name="tel" type="text" id="phone" size="30" value="" value="<?php echo $res['tel'];?>"/>

                                    <label for="adresse"></label>
                                    <input type="text" name="adresse" id="adresse" value="<?php echo $res['adresse'];?>" class=""/>
                                    
                                    <label for="logo"></label>
                                    <input type="file" name="photo" id="logo" value="" class=""/>
                                    
                                      
    
 <select name="secteur" >
    	<?php
		include("model/secteur.php");
		$u=new secteur();
		$res=$u->Affsecteur();
		?>
       <?php
  for($i=0;$i<count($res);$i++)
  {
	  
  
  ?>
        <option value="<?php echo $res[$i]['id']; ?>"> 
		  <?php echo $res[$i]['nom']; ?>
      </option>
    <?php
  }
  ?>
    </select>
  
   
                                


                                    <button name="ajoute" type="submit" class="btn" id="submit"> Submit</button>

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

