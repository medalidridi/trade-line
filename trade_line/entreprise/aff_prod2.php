

                         <?php include("menu.php"); ?>
           


            <!-- content -->
            <section id="content" class="portfolio">

                <header class="headerPage">
                    <div class="container clearfix">
                        <div class="row">
                            <h1 class="span8">3 <span>columns</span></h1>
                            <div class="span4" id="navTrail"> 
                                <a href="index.html" class="homeLink">home</a><span>/</span><a href="portfolio-2columns.html">portfolio</a><span>/</span><span class="current">3 columns</span> 
                            </div>
                        </div>

                    </div>
                </header>  

                <div class="container clearfix">
                    <div class="row">
                        <nav  class="span6">
                            <ul>
                                <li class="filterTitle"><h3>Categories:</h3></li>
                                <li><a href="" class="current btn btn-3d btnSmall" data-filter="*">tous</a></li>
                                
                                
                                <?php
		include("model/categorie.php");
		$u=new categorie();
		$res=$u->Affcategorie();
		?>
       <?php
  for($i=0;$i<count($res);$i++)
  {
	  
  
  ?>
                                <li><a href="aff_prod2.php?id=<?php echo $res[$i]['id'];?>" class="current btn btn-3d btnSmall" data-filter="*"><?php echo $res[$i]['nom']; ?></a></li>
                                <?php }?>
                                
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="slice clearfix">
                    <div class="container" id="threeColumns">
                        <div class="row">
                            <div class="portfolio-items isotopeWrapper clearfix da-thumbs" id="3">

 <?php
$idc=$_GET['id'];
include("model/produit.php");
$u=new produit();
$res=$u->affproduitbycateg($idc);

?>
      
      
       <?php
  for($i=0;$i<count($res);$i++)
  {
	  
  
  ?>

                                <article class="span4 isotopeItem men boxWrapper">

                                    <a href="images/portfolio/vign1-big.jpg" class="prettyPhoto">
                                        <section class="imgWrapper"> <img src="produit/<?php echo $res[$i]['photo'];?>" alt=""/></section> 
                                        <div>
                                            <span class="iconWrapper iconLink"><i class="icon-search"></i></span>                                        </div>
                                    </a>
                                    <section class="blocBody">
                                    <?php echo $res[$i]['nom'];?><br>
  <a href="#" class="moreLink"> read more</a></p>
                                    </section>
                                </article>

<?php }?>




                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <!-- footer -->
         <?php include("footer.php"); ?>
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
