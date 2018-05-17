<?php
$id_session=session_id();
$id_client=$_GET['id_client'];

include("model/produit.php"); 
include("model/client.php");

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
        <link type="text/css" rel="stylesheet" href="js-plugin/ajax-contact-extend/assets/css/contact.css"/>


        <!-- icon fonts -->
        <link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons.css">
        <link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons-ie7.css">


        <!-- Custom css -->
         <link type="text/css" rel="stylesheet" href="css/layout.css">
        <link type="text/css" id="colors" rel="stylesheet" href="css/dark-blue.css">
        <link type="text/css" id="colors" rel="stylesheet" href="css/blue.css">
        <link type="text/css" id="colors" rel="stylesheet" href="css/identifiant.css">
        <link rel="stylesheet" type="text/css" href="css/submenu.css" />
        
        
        
            <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"type="text/javascript"></script>
    
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
            
        <!--[if gte IE 9]><style type="text/css">.iconBig, .active, .hover a , .Shover a { filter: none !important; } </style> <![endif]-->
         <script type="text/javascript">
		
	$(".popuplink button").click(function() {
 $(".popupbox").show();
 $(".popupbg").addClass("impobg");
 
 });
        
        </script>
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

  