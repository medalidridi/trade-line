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
        <link type="text/css" rel="stylesheet" href="js-plugin/isotope/css/style.css">
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
        <link href="css/test.css" rel="stylesheet" type="text/css">

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
                               <li >
           <form method="get" action="produit_rechercher.php"   Style="margin-top: 28px;margin-right: 17px;">
                                    <div class="input-append">
                                        <input type="search" placeholder="Recherche" Style="height :15px; margin-left:-30px;margin-bottom:-48px; margin-right:5px;"  name="nom" /> 
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
                                         <li><a href="contact.php" class="firstLevel last">Contact</a></li>
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
             
 <form action="produit_rechercher_secteur.php" method="get">
<table>
<tr>
    <td>Categorie :</td>
    <td><select name="categorie" style="width: 120%;">
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
  </select>
  </td>
  </tr>
  
  
  <tr>
  <td>Prix</td>
  <td><input id="example1" type="range" min="10" max="10000"  step="10" onchange="textbox1.value = example1.value" style="width:75%;"/></td>
    <td><input id="textbox1" type="text" placeholder="min" size="2" name="prix_min" style="margin-left: -42%;width: 60%;"/></td>
  <td></td>
  </tr>
  <tr>
  <td>Prix</td>
  <td><input id="example2" type="range" min="10" max="10000"  step="10" onchange="textbox2.value = example2.value" style="width:75%;"/></td>
    <td><input id="textbox2" type="text" placeholder="max" name="prix_max" size="2" style="margin-left: -42%;width: 60%;"/></td>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    
  <td><input type="submit"  id="recherger" value="rechercher" style="margin-left: 611%;"/></td>
  </tr>
  </table>

  


</form>
                                </nav>
       
                        </div>
                    </div>
                </header>

<nav class="slice clearfix" style="margin-left:140px;z-index: 9999;
position: absolute; ">
        
        
	
        
        </nav>

                <div class="slice clearfix">
                    <div class="container" id="twoColumns">
                        <div class="row">	<?php include("aside.php"); ?>
                            <div class="portfolio-items isotopeWrapper clearfix da-thumbs" id="2" >


        
                            <?php
							
$id=$_GET['id2'];
include("model/produit.php");
$u=new produit();
$res=$u->affproduitbysouscateg($id)

?>
      
      
       <?php
  for($i=0;$i<count($res);$i++)
  {
	  
  
  ?>


                                <article class="span6 isotopeItem men boxWrapper">

                                      <a href="../entreprise/produit/<?php echo $res[$i]['photo']?>" class="prettyPhoto">
                                        <section class="imgWrapper"> <img src="../entreprise/produit/<?php echo $res[$i]['photo']?>" alt=""/></section> 
                                        
                                         <div>
                                                            <a href="control/add_panier.php?id=<?php echo $res[$i]['id']; ?>">
                         <span class="iconWrapper iconLink"><i class="icon-basket">
                                                                </i></span> 
                                                            </div>
                                        
                                        <div>
                                            <span class="iconWrapper iconLink"><i class="icon-plus"></i></span>                                        </div>
                                    </a>

                              <section class="blocBody">
                                        <h3><?php echo $res[$i]['nom'];?></h3>
                                        
                                        <p  class="boxTextWrapper"><?php echo $res[$i]['description'];?><br>stock :<?php echo $res[$i]['stock'];?><a href="vue_produit.php?id=<?php echo $res[$i]['id'];?>" class="moreLink">&rarr; read more</a></p>
                                  </section>

                                </article>

<?php } ?>
                               


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- footer -->
           <?php include("footer.php") ?>
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
        <script type="text/javascript" src="js-plugin/isotope/jquery.isotope.min.js"></script>
        
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
