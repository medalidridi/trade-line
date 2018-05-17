<?php include("menu.php"); ?>
             


        <!-- global wrapper -->    
        <div id="globalWrapper">


            <!-- page content -->
            <section id="content">

                <header class="headerPage">
                    <div class="container clearfix">
                        <div class="row">
                            <h1 class="span8">Connexion  <span> </span></h1>
                            <div class="span4" id="navTrail"> 
                                <a href="index.php" class="homeLink">home</a><span>/</span><span class="current">contact</span>
                            </div>
                        </div>
                    </div>
                </header>



                <div class="slice clearfix">
                    <div class="container">
                        <div class="row"> 
                            <!-- contact intro --><!-- contact intro -->


                            <!-- contact form -->
                            <div class="span6">

                                <form method="post" action="control/connect.php" >

                                   
                                    <input type="text" name="login" id="login"  class=""/>

                                   
                                    <input type="password" name="pwd" id="pwd" class=""/>

<input name="oui" type="submit" value="connexion">
                                   

                                </form>

                                <div id="message"></div>
                            </div>
                            <!-- contact form -->

                            <!-- address bloc -->
                            <div class="span3">
                                <address>
                                   
                                </address>
                            </div>
                            <!-- address bloc -->
                        </div>
                    </div>
                </div>



                <!-- map --><!-- map -->    

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
