<?php include("menu.php"); ?>
<?php include("menu_secteur.php") ?>
            <!-- content -->
     
           <nav id="aside1">
            <?php include("aside_media.php"); ?></nav>
            <!-- content -->
            <section id="content" class="portfolio" >
            
            <nav style="margin-left:800px">
             
                                <form action="cont_sous_cat.php" method="post">

    <td>categorie</td>
    <td><select name="categorie">
    	<?php
		$id=$_GET['id'];
		include("model/categorie.php");
		$u=new categorie();
		$res=$u->Affcategoriebyid($id);
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
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="slice clearfix">
                    <div class="container" id="threeColumns">
                        <div class="row">
                            <div class="portfolio-items isotopeWrapper clearfix da-thumbs" id="3" style="margin-left:50px; width:1100px;height:2000px">


<?php
$idc=$_GET['id'];

$u=new produit();
$res=$u->affproduitbycateg($idc);

?>
      
      
       <?php
  for($i=0;$i<count($res);$i++)
  {
	  
  
  ?>



                                <article class="span4 isotopeItem women boxWrapper isotope-item" style="position: absolute; left:42px; top: 0px; transform: translate3d(640px, 0px, 0px);" >

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

<?php } ?>

                              

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
