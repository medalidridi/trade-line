<?php
session_start();
$id_session=session_id();
include("model/produit.php");

include("model/client.php"); 


if (isset($_SESSION['id']) )
{
	$identifiant=$_GET['id_client'];
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS
        ================================================== -->
        <!-- Bootstrap  -->
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <!-- web font  -->
         <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800" rel="stylesheet" type="text/css">

        <!-- plugin css  -->
        <link type="text/css" rel="stylesheet" href="js-plugin/camera/css/camera.css">
        <link type="text/css" rel="stylesheet" href="js-plugin/hoverdir/css/style.css">
        
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

        <link rel="shortcut icon" href="images/logo/reduit2.png">
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
                    
                    
    
    
     <a href="index.php" class="brand"><img src="images/logo/logo_site.png"  alt="Trade line"/></a>
   <nav id="mainMenu" class="clearfix">
                    <ul>
                    
                                       
                    <li Style="float: right;margin-top: -11px;">
                   <a href="vuepanier.php" >
            <span class="iconWrapper iconLink" Style="width: 35px;height: 35px;"><i class="icon-basket" Style="top: -1px;left: 7px;"></i></span>
                   </a>
                       <ul>
                  <?php
				  include("model/config.php");   
				  
				   $st = $db->query("SELECT COUNT(*) FROM panier WHERE id_session='$id_session'")->fetch();
				  $qte=$st['COUNT(*)'];
				  
				  
				   $stt = $db->query("SELECT * FROM panier WHERE id_session='$id_session'")->fetchAll();
		
				 $prixs = 0;
				 for ($k=0;$k<$qte;$k++){
	             
				   
				  $prixs += intval($stt[$k]['prix']);
				 
				 }
				  ?>
                  
                  
                  
                  
                   <li><a href="template-contact.html" class="last">Quantite : <span><?php echo $qte;?></span></a></li>
                    <li><a href="template-contact.html" class="last">TOTAL : <span><?php echo $prixs;?></span></a></li> 
                    
                    </ul>
                                      </li>  
                                      
                                        <?php
$id_client=$_GET['id_client'];
$u=new client();
$res=$u->affclientbyidclient($id_client);
?>

<li><h3 style="margin-left: -40%;margin-top: 21%;"> Bienvenue   <?php echo $res['nom']; ?> </h3></li>
                               <li >
           <form method="get" action="produit_rechercher_c.php"   Style="margin-top: 28px;margin-right: 17px;">
                                    <div class="input-append">
                                        <input type="search" placeholder="Recherche" Style="height :15px; margin-left:-30px;margin-bottom:-48px; margin-right:5px;"  name="nom" /> 
                                <span style="margin-left:-5px;"> 
                                
                             <input type="hidden" name="id_client" value="<?php echo $id_client; ?>"/>
                                        <button type="submit" class="icon-search" style="height: 25px;"></button>
                                    </div>
                                </form>
                               </li>
                              

                    
                                   <li><a href="index_c.php?id_client=<?php echo $id_client ?>" class="firstLevel active">Accueil</a></li>
                                   <li><a href="profil_client.php?id=<?php echo $id_client ?>" class="firstLevel ">Profil</a></li>
                                 <li><a href="deconnecter.php" class="firstLevel ">deconnexion</a></li>
                                   
                                   
                                   
                                	

                                     
                               
                                        
                                        
                                     
                                          
                                       
                                      
                                      
                                      
                                        
                  </ul>
                     
   </nav>
                        
             </div>
            </div>
            </div>
        </header>
            <!-- header --> 



            <!-- content -->
            <section id="content" class="project">


                 <?php include("menu_secteur_c.php") ?>
                
                <?php
$id=$_GET['id'];


$w=new produit();
$resultat=$w->affIdEntreprise($id);

$z=new produit();
$r=$z->affproduitbyid($id);

$y=new produit();
$resu=$y->affnomentreprise($id);

$id_categorie=$r['id_categorie'];
 
 
$x=new produit();
$resultat1=$x->affproduitbycategorie($id_categorie);
?>
               




                <div class="slice clearfix">
                    <div class="container">
                        <div class="row">
                            <header class="span12">

                                <div class="row">
 
                                    <div class="span8">

                                        <div class="camera_wrap_nonav">
                                            <div  data-src="../entreprise/produit/<?php echo $r['photo'];?>"></div>
                                            <div  data-src="../entreprise/produit/<?php echo $r['photo'];?>"></div>

                                        </div>  
                                    </div>

                            <div class="portfolio-items isotopeWrapper clearfix da-thumbs" id="4">


                                    <div class="span4">
                                        <nav id="projectsNav">
                                            <ul>
                                                <li><a href="" class="btn btn-3d btnSmall">Previous</a></li>
                                                <li><a href="" class="btn btn-3d btnSmall">Next</a></li>
                                            </ul>
                                        </nav>
                                        <h2>Description</h2>
                                        <div class="divider"><span></span></div>  
                                        <p> <?php echo $r['description']; ?>. </p>
                                        <h3>Entreprise</h3>
                                        <p><?php echo $resu['nom']; ?></p>
                                        <h3>stock</h3>
                                        <p><?php echo $r['stock'];?></p>
                                        <h3>Plus d'information</h3>
                                        <p><a href="msg_reponse.php?id=<?php echo $id_client; ?>&id2=<?php echo $resultat['id']; ?> " class="btn btn-3d btnSmall">Contacter entreprise</a></p>

                                        <nav class="share">
                                            <ul class="socialNetwork medium">
                                                <li><a title="Share on Facebook" class="socialIcon icoFacebook tips" href="#"><span>facebook</span></a></li>
                                                <li><a title="Share me on Twitter" class="socialIcon icoTwitter tips" href="#"><span>twitter</span></a></li>
                                                <li><a title="Share me on Pinterest" class="socialIcon icoPinterest tips" href="#"><span>google</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </header>
                        </div>
                    </div>


                    <section class="slice">
                        <div class="container clearfix" id="otherProjects">
                            <div class="row da-thumbs">
                                <div class="span12"><h2>Other works <span>in this category</span></h2>
                                    <div class="divider"><span></span></div>  

                                </div>

       <?php
  for($i=0;$i<(3);$i++)
  {
	?>
                                <article class="span4 bloc">

                                    
                                        <section class="imgWrapper"> <img src="../entreprise/produit/<?php echo $resultat1[$i]['photo'];?>" alt=""/></section> 
                                        <div>
                                            <span class="iconWrapper iconLink"><i class="icon-search"></i></span>                                        </div>
                                    

                                  <h3>Nom:&nbsp; <?php echo $resultat1[$i]['nom'];?>&nbsp;|&nbsp;Prix:<?php echo $resultat1[$i]['prix'];?></h3>
                                    <p><?php echo $resultat1[$i]['description'];?></p>
                              </article>

<?php } ?>
                              
                            </div>

                        </div>
                    </section>
                </div>
            </section>
            <!-- page content -->


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

        <!-- third party plugins  -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap-carousel.js"></script>
        <script type="text/javascript" src="js-plugin/easing/jquery.easing.1.3.js"></script>
        
        <script type="text/javascript" src="js-plugin/seaofclouds-tweet/tweet/jquery.tweet.js"></script>
        <script type="text/javascript" src="js-plugin/camera/camera.min.js"></script>
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
