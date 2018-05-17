<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Basic Page Needs
      ================================================== -->
        <meta charset="utf-8">
        <title>Trade-Line</title>
        <meta name="description" content="OHMY!  HTML5 responsive Website template based on Twitter Bootstrap framework. Easy to customize.">
        <meta name="author" content="Little NEKO">

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <!-- CSS
        ================================================== -->
        <!-- Bootstrap  -->
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <!-- web font  -->
         <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800" rel="stylesheet" type="text/css">

        <!-- plugin css  -->
        <link type="text/css" rel="stylesheet" href="js-plugin/ajax-contact-extend/assets/css/contact.css"/>


        <!-- icon fonts -->
        <link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons.css">
        <link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons-ie7.css">


        <!-- Custom css -->
        <link type="text/css" rel="stylesheet" href="css/layout.css">
        <link type="text/css" id="colors" rel="stylesheet" href="css/colors.css">


        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
            
        <!--[if gte IE 9]><style type="text/css">.iconBig, .active, .hover a , .Shover a { filter: none !important; } </style> <![endif]-->
        
        <script src="js/modernizr-2.6.1.min.js"></script>

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">

    </head>
    <body onLoad="initialize('mapWrapper')">
        <!-- Primary Page Layout 
        ================================================== -->


        <!-- header -->
        <header id="mainHeader" class="clearfix">


            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">

                        <a href="index.php" class="brand"><img src="images/main-logo.png" alt="Ohmy website template"/></a>


                       <nav id="mainMenu" class="clearfix">
                            <ul>
                                <li><a href="inscription.php" class="firstLevel active last" >Inscription</a>
                                 
                                </li>
                         <li><a href="connexion_admin.php" class="firstLevel">connexion admin</a>
                               		

                              <li><a href="connection.php" class="firstLevel">connexion Entreprise</a></li>


                          <li><a href="connexion_client.php" class="firstLevel">Connexion Client</a>
                                    
                         
                        </nav>

                    </div>
                </div>
            </div>
        </header>
        <!-- header --> 


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

                                <form method="post" action="control/connect_admin.php" >

                                   
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
            <footer class="footer1 noMargin">
                <div class="container" id="footer">
                    <div class="row">
                        <div class="span3 testimonialWidget">
                            <h2>Testimonial</h2>
                            <div class="divider"><span></span></div>
                            <p>Little Neko is a web design and development studio.<br />
                                </p>
                        </div>
                        <div class="span3 tweetWidget">
                            <h2>Latest tweets</h2>
                            <div class="divider"><span></span></div>
                            <div class="tweet"></div>
                        </div>


                        <div class="span3 contactWidget">
                            <h2>Contact us</h2>
                            <div class="divider"><span></span></div>
                           <address>
                                <strong>Little NEKO</strong>
                                <p>
                                <i class="icon-location"></i>&nbsp;77 Mass. Ave., E14/E15<br/>
                                Cambridge, MA 02139-4307 USA
                                </p>
                                <p>
                                <i class="icon-phone"></i>&nbsp;615.987.1234
                                </p>
                                <p>
                                 <i class="icon-mail-alt"></i>&nbsp;<a href="mailto:little@little-neko.com">little@little-neko.com</a>
                                 </p>
                            </address>
                        </div>


                        <div class="span3 sociallWidget">
                            <h2>Follow us</h2>
                            <div class="divider"><span></span></div>
                            <ul class="socialNetwork nav">
                                <li><a href="#" class="icon-rss socialIcon tips"  title="Our rss feed"><span>rss feed</span></a></li>
                                <li><a href="#" class="icon-facebook socialIcon tips"  title="follow us on Facebook"><span>facebook</span></a></li>
                                <li><a href="#" class="icon-twitter-bird socialIcon tips"  title="follow us on Twitter"><span>twitter</span></a></li>
                                <li><a href="#" class="icon-gplus socialIcon tips"  title="follow us on Google +"><span>google +</span></a></li>
                                <li><a href="#" class="icon-instagram socialIcon tips"  title="follow us on Instagram"><span>instagram</span></a></li>
                                <li><a href="#" class="icon-linkedin socialIcon tips"  title="follow us on Linkedin"><span>linkedin</span></a></li>
                                <li><a href="#" class="icon-pinterest-circled socialIcon tips"  title="follow us on Pinterest"><span>Pinterest</span></a></li>
                            </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed lectus in turpis consequat pharetra. Nulla velit purus, vestibulum sit amet ultrices eget, ultricies ut massa. Cras ac nulla at arcu vehicula hendrerit. </p>
                        </div>
                    </div>
                </div>
            </footer>

            <footer class="footer2" id="footerRights">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <p>Copyright © 2012 Little NEKO / All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>
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
