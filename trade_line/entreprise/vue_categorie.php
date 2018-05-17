<?php 
 session_start();
if (isset($_SESSION['id']))
{$id=$_SESSION['id'];
	include("menu_connecte.php");

}
else
{
	include("menu.php");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
    <!--<![endif]--><head>
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
        <link rel="stylesheet" type="text/css" href="js-plugin/pretty-photo/css/prettyPhoto.css" />
        <link type="text/css" rel="stylesheet" href="js-plugin/isotope/css/style.css">
        <link type="text/css" rel="stylesheet" href="js-plugin/hoverdir/css/style.css">


        <!-- Custom css -->
        <link type="text/css" rel="stylesheet" href="css/layout.css">
        <link type="text/css" id="colors" rel="stylesheet" href="css/colors.css">

        <!-- icon fonts -->
        <link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons.css">
        <link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons-ie7.css">


        <!-- Custom css -->
        <link type="text/css" rel="stylesheet" href="css/layout.css">
        <link type="text/css" id="colors" rel="stylesheet" href="css/dark-blue.css">
        <link type="text/css" id="colors" rel="stylesheet" href="css/blue.css">
        <link type="text/css" id="colors" rel="stylesheet" href="css/identifiant.css">
        <link rel="stylesheet" type="text/css" href="css/submenu.css" />



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

    <body>
        <!-- Primary Page Layout
        ================================================== -->

        <div id="globalWrapper">



            <!-- header -->
           <header id="mainHeader" class="clearfix">


            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                    
                    
    
    
     <a href="index.php" class="brand"><img src="images/logo11.png"  alt="Trade line"/></a>
   <nav id="mainMenu" class="clearfix">
                    <ul>
                    
                                       
                    <li Style="float: right;margin-top: -11px;">
                  
                                      </li>  
                               <li >
           <form method="post" action="blog-home.html" Style="margin-top: 28px;margin-right: 17px;">
                                    <div class="input-append">
                                        <input type="search" placeholder="Recherche" Style="height :15px; margin-left:-30px;margin-bottom:-48px; margin-right:5px;" value=""/> 
                                <span style="margin-left:-5px;"> 
                                        <button type="submit" class="icon-search" style="height: 25px;"></button>
                                    </div>
                                </form>
                               </li>
                               
                              

                    
                                   <li><a href="index.php" class="firstLevel active">Accueil</a></li>
                                
                                
                                	<li><a href="connexion_client.php" class="firstLevel">Espace Client</a>
                                       <ul>
                                 			<li><a href="connexion_client.php" class="firstLevel">Se Connecter</a></li>
                                 			<li><a href="formulaire_client.php" class="firstLevel">Creer Compte</a></li>
                                 	   </ul>
                                       </li>
                                  
                                  
                               <li><a href="connexion_entreprise.php" class="firstLevel" >Espace Entreprise</a>
                                	<ul>
                                 			<li><a href="connexion_entreprise.php" class="firstLevel">Se Connecter</a></li>
                                  			<li><a href="formulaire_entreprise.php" class="firstLevel">Creer Compte</a></li>
                                  	</ul>
                                </li>


                                <li><a href="template-columns.html" class="firstLevel">à propos</a>
                                    <ul >
                                         <li><a href="template-about.html">About us</a></li>
                                         <li><a href="template-services.html">Services</a></li>
                                         <li><a href="template-faq.html">FAQ</a></li>
                                         <li><a href="template-our-team.html">Our team</a></li>
                                         <li><a href="template-contact.html" class="firstLevel last">Contact</a>
                                              <ul>
                                       				 <li><a href="template-contact.html" class="last">Contact template 1</a></li>
                                        			 <li><a href="template-contact-2.html" class="last">Contact template 2</a></li>
                                             </ul>
                                        </li>
                                        
                                        
                                     
                                          
                                       
                                      
                                      
                                      
                                        
                  </ul>
                     
   </nav>
                        
             </div>
            </div>
            </div>
        </header>
            <!-- header --> 



            <!-- content -->
            <section id="content" class="portfolio">

               
                <?php include("menu_secteur.php") ?>
                
                
                <header class="headerPage" style="width: 75.3%;
margin-left: 155px;">
                    <div class="container clearfix">
                        <div class="row">
                             <nav style="margin-left:160px">
             
 <form action="cont_sous_cat.php" method="post">

    <td>categorie</td>
    <td><select name="categorie">
    	<?php
		$id=$_GET['id'];
		include("model/categorie.php");
		$u=new categorie();
		$res=$u->affcategoriebyidsec($id);
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
<input type="submit" name="rechercher" id="recherger" value="rechercher" />
  


</form>
                                </nav>
       
                        </div>
                    </div>
                </header>    
 

                 <nav class="slice clearfix" style="margin-left:140px;z-index: 9999;
position: absolute; ">
        
        
	
        
        </nav>

                <div class="slice clearfix">
                    <div class="container" id="threeColumns">
                        <div class="row">	<?php include("aside.php"); ?>
                            <div class="portfolio-items isotopeWrapper clearfix da-thumbs" id="3">
                            
                            
                          
                          
                          
                            <?php
							
$id=$_GET['id1'];

$u=new produit();
$res=$u->affproduitbycateg($id);

?>
      
      
       <?php
  for($i=0;$i<count($res);$i++)
  {
	  
  
  ?>
                            

                                <article class="span4 isotopeItem men boxWrapper">

                                    <a href="images/portfolio/vign1-big.jpg" class="prettyPhoto">
                                        <section class="imgWrapper"> <img src="produit/<?php echo $res[$i]['photo']?>" alt=""/></section> 
                                        <div>
                                            <span class="iconWrapper iconLink"><i class="icon-search"></i></span>                                        </div>
                                    </a>
                                    <section class="blocBody">
                                        <h3><?php echo $res[$i]['nom'];?></h3>
                                        <p class="boxTextWrapper">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. Sed ac consectetur leo. Pellentesque habitant morbi tristique senectus et netus... <a href="#" class="moreLink">&rarr; read more</a></p>
                                    </section>
                                </article>


<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <!-- footer -->
            <footer class="footer1">
                <div class="container" id="footer">
                    <div class="row">
                        <div class="span3 testimonialWidget">
                            <h2>Testimonial</h2>
                            <div class="divider"><span></span></div>
                            <p>Little Neko is a web design and development studio.<br />
                                We build responsive HTML5 and CSS3 templates, integrating best web design practises and up-to-date web technologies to create great user experiences. We love what we do and we hope you too ! </p>
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
                                <li><a href="#" class="icon-rss socialIcon tips" title="Our rss feed"><span>rss feed</span></a></li>
                                <li><a href="#" class="icon-facebook socialIcon tips" title="follow us on Facebook"><span>facebook</span></a></li>
                                <li><a href="#" class="icon-twitter-bird socialIcon tips" title="follow us on Twitter"><span>twitter</span></a></li>
                                <li><a href="#" class="icon-gplus socialIcon tips"  title="follow us on Google +"><span>google +</span></a></li>
                                <li><a href="#" class="icon-instagram socialIcon tips"  title="follow us on Instagram"><span>instagram</span></a></li>
                                <li><a href="#" class="icon-linkedin socialIcon tips"  title="follow us on Linkedin"><span>linkedin</span></a></li>
                                <li><a href="#" class="icon-pinterest-circled socialIcon tips"  data-original-title="follow us on Pinterest"><span>Pinterest</span></a></li>
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
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

        <!-- third party plugins  -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap-carousel.js"></script>
        <script type="text/javascript" src="js-plugin/easing/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js-plugin/isotope/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="js-plugin/pretty-photo/js/jquery.prettyPhoto.js"></script>
        
        <script type="text/javascript" src="js-plugin/seaofclouds-tweet/tweet/jquery.tweet.js"></script>
        <script type="text/javascript" src="js-plugin/hoverdir/jquery.hoverdir.js"></script>

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
