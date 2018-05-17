  <?php include("menu.php"); ?>

                    </div>
                </div>
            </div>
        </header>
        <!-- header --> 



        <!-- global wrapper -->    
        <div id="globalWrapper">


            <!-- page content -->
            <section id="content" >

                <header class="headerPage">
                    <div class="container clearfix">
                        <div class="row">
                            <h1 class="span8">Contact  <span>us </span></h1>
                            <div class="span4" id="navTrail"> 
                                <a href="index.php" class="homeLink">home</a><span>/</span><span class="current">contact 2</span>
                            </div>
                        </div>
                    </div>
                </header>



                <div class="container clearfix slideContactpage">
                    <div class="row">
                        <div id="contactinfoWrapperPage" class="clearfix">
                            <div class="span3">
                                <p>&nbsp;</p>
                            </div>

                            <!-- contact form -->
                            <div class="span6">
 <?php

include("model/client.php");
$u=new client();
$res=$u->modifclient($id);

?>

                                <form method="post" action="control/modif_profil.php" >
                                                                                                                                                                                               <input type="text" name="nom" id="nom" value="<?php echo $res['nom'];?>" class=""/>
                                <input type="text" name="prenom" id="prenom" value="<?php echo $res['prenom'];?>" class=""/>
                                 <label for="photo"></label>
                                 <input type="file" name="photo" id="photo" value="<?php echo $res['photo'];?>" class=""/>
                                 <input type="text" name="email" id="email" value="<?php echo $res['email'];?>" class=""/>                                 			                                 <input type="text" name="confemail" id="confemail" value="<?php echo $res['confemail'];?>" class=""/>                                  <input type="text" name="login" id="login" value="<?php echo $res['login'];?>" class=""/>                                                                  <input type="password" name="pwd" id="pwd" value="<?php echo $res['pwd'];?>" class=""/> 
                                 <input name="tel" type="text" id="tel" size="30" value="" value="<?php echo $res['tel'];?>"/>
                                 <label for="adresse"></label>
                                 <input type="text" name="adresse" id="adresse" value="<?php echo $res['adresse'];?>" class=""/>
                                 <input type="text" name="civilite" id="civilite" value="<?php echo $res['civilite'];?>" class=""/> 
                                 <input type="text" name="DNS" id="DNS" value="<?php echo $res['DNS'];?>" class=""/>
                                                   


                                    <button name="ajoute" type="submit" class="btn" id="submit"> Submit</button>

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
