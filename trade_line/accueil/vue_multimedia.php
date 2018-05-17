<?php include("menu.php"); ?>         
   <!-- header --> 
   

                <?php include("menu_secteur.php") ?>
                
                
                <header class="headerPage" style="width:75.3%; margin-left:155px;">
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
       
                        </div>
                    </div>
                </header>    

                <div class="slice  clearfix">

                    <div class="container">
                        <div class="row">


                            <div class="span3">

                                <!-- Sticky menu -->
                                
   
        <?php include("aside_media.php"); ?>
        
                                <!-- Sticky menu -->
                            </div>


                            <div class="span9" >

                                <section id="article1">


                                    <div>
                                        <header class="row-fluid">
                                            <div class="span7">

                                                <div class="imgWrapper" > 
                                                    <img src="images/blog-pic1.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="span5">
                                                <ul class="projectInfos">
                                                    <lI><strong>Client :</strong> Coca cola</li>
                                                    <lI><strong>Date :</strong> 2007</li>
                                                    <lI><strong>Features : </strong>internet, graphic design, lolcatz</li>

                                                </ul>
                                            </div>

                                        </header>
                                    </div>


                                    <article>
                                        <h2>Lorem ipsum dolor sit amet</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna velit. Quisque placerat, risus in adipiscing rhoncus, 
                                            quam purus bibendum sapien, a bibendum odio leo sit amet metus. Sed sed dolor sit amet lacus luctus blandit ut a lorem. Fusce feugiat 
                                            aliquam imperdiet. </p>
                                        <a href="portfolio-project.html" class="btn btn-3d btnSmall">view project</a>

                                    </article>



                                    <footer class="clearfix">             
                                        <nav class="navigate">
                                            <ul class="">
                                                <li><a title="Down" class="iconWrapper iconSmall goDown" href="#"><i class="icon-down-open"></i></a></li>
                                            </ul>
                                        </nav>
                                    </footer>

                                </section> 
                                <section id="article2">


                                    <div>
                                        <header class="row-fluid">
                                            <div class="span7">

                                                <div class="imgWrapper" > 
                                                    <img src="images/blog-pic2.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="span5">
                                                <ul class="projectInfos">
                                                    <lI><strong>Client :</strong> Coca cola</li>
                                                    <lI><strong>Date :</strong> 2007</li>
                                                    <lI><strong>Features : </strong>internet, graphic design, lolcatz</li>

                                                </ul>
                                            </div>

                                        </header>
                                    </div>


                                    <article>
                                        <h2>Lorem ipsum dolor sit amet</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna velit. Quisque placerat, risus in adipiscing rhoncus, 
                                            quam purus bibendum sapien, a bibendum odio leo sit amet metus. Sed sed dolor sit amet lacus luctus blandit ut a lorem. Fusce feugiat 
                                            aliquam imperdiet. </p>
                                        <a href="portfolio-project.html" class="btn btn-3d btnSmall">view project</a>

                                    </article>



                                    <footer class="clearfix">             
                                        <nav class="navigate">
                                            <ul class="">
                                                <li><a title="Up" class="iconWrapper iconSmall goUp" href="#"><i class="icon-up-open up"></i></a></li>
                                                <li><a title="Down" class="iconWrapper iconSmall goDown" href="#"><i class="icon-down-open"></i></a></li>
                                            </ul>
                                        </nav>
                                    </footer>

                                </section> 

                                <section id="article3">


                                    <div>
                                        <header class="row-fluid">
                                            <div class="span7">

                                                <div class="imgWrapper" > 
                                                    <img src="images/blog-pic3.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="span5">
                                                <ul class="projectInfos">
                                                    <lI><strong>Client :</strong> Coca cola</li>
                                                    <lI><strong>Date :</strong> 2007</li>
                                                    <lI><strong>Features : </strong>internet, graphic design, lolcatz</li>

                                                </ul>
                                            </div>

                                        </header>
                                    </div>


                                    <article>
                                        <h2>Lorem ipsum dolor sit amet</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna velit. Quisque placerat, risus in adipiscing rhoncus, 
                                            quam purus bibendum sapien, a bibendum odio leo sit amet metus. Sed sed dolor sit amet lacus luctus blandit ut a lorem. Fusce feugiat 
                                            aliquam imperdiet. </p>
                                        <a href="portfolio-project.html" class="btn btn-3d btnSmall">view project</a>

                                    </article>



                                    <footer class="clearfix">             
                                        <nav class="navigate">
                                            <nav class="navigate">
                                                <ul class="">
                                                    <li><a title="up" class="iconWrapper iconSmall goUp" href="#"><i class="icon-up-open up"></i></a></li>
                                                </ul>
                                            </nav>
                                        </nav>
                                    </footer>

                                </section> 
                            </div>  



                        </div>
                    </div>

                </div>

            </section>
            <!-- page content -->



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
        
        <script type="text/javascript" src="js-plugin/seaofclouds-tweet/tweet/jquery.tweet.js"></script>


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