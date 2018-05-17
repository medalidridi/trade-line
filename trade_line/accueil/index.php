

                     <?php include("menu.php"); ?>
                     <link href="ext.css" rel="stylesheet" type="text/css" />

        <!-- globalWrapper --> 
        <div id="globalWrapper"> 


            <!-- slider -->
            <section  id="sliderWrapperRS">
                <!-- background slider dark bloc -->
                <div id="bgSliderBlocWrapper">
                    <div class="container">
                        <div id="bgSliderBloc">
                        
                           <nav id="men">
                           
     <?php
include("model/secteur.php");
$U=new secteur();
$res=$U->Affsecteur();

?>
<ul>
<li><a href="index.php" Style="padding: 8px;margin-left:0px !important; -webkit-border-radius: 10px 0 00px;border-radius: 10px 0 00px;"><span class="iconWrapper iconLink"><i style="margin-bottom:5px;" class="icon-home"  style="width:30px; height:auto; margin-top:10px; margin-right:5px;margin-top: -2px;"></i></span> ></a></li>

      <?php
  for($i=0;$i<count($res);$i++)
  {

  ?>
           <li> <b><i> <a href="vue_secteur.php?id=<?php echo $res[$i]['id'];?>" ><?php echo $res[$i]['nom']; ?></a> </i></b></li>
                              
<?php } ?>


</ul>
</nav>
                        
                        </div>
                    </div>
                </div>
                <!-- background slider dark bloc -->

                 <div class="fullwidthbanner-container">
                    <div class="fullwidthbanner" >
                        <ul>
                            <li data-transition="fade" data-slotamount="1"  data-masterspeed="2000"> <img src="images/slider/rs/offre.jpg" alt="slide"/>
                            
                             <li data-transition="slide" data-slotamount="2"  data-masterspeed="2000" > <img src="images/slider/rs/unite.jpg" alt="slide"/>
                               
                             <li data-transition="flip" data-slotamount="3"  data-masterspeed="2000" > <img src="images/slider/rs/ohmy1.png" alt="slide"/>

 <li data-transition="pop" data-slotamount="4"  data-masterspeed="2000" > <img src="images/slider/rs/thumb.png" alt="slide"/>
                               
                             <li data-transition="slidedown" data-slotamount="5"  data-masterspeed="2000" > <img src="images/slider/rs/unite.jpg" alt="slide"/>

                               
                    </div>
                </div>
            </section>
            <!-- slider -->


            <!-- content -->
           
                <!-- three blocs -->


                <!-- carousel works-->
                <section class="slice">

                    <div class="container">
                        <div class="row">

                            <div class="span12">
                                <h2><span>Top </span>Ventes</h2>
                                <div class="divider"><span></span></div>  
                            </div>
                            <div class="span12">

                                <div id="projectCarousel" class="carousel slide">

                                    <div class="carousel-inner da-thumbs">

                                        <div class="active item">
                                            <div class="row">
 
                                            
                                            <?php 	
											$u= new produit();
											
											$product=$u->Affproduit();
											
											for ($i=0;$i<4;$i++){?>
                                            
                                            
                                                <div  class="span3" >
                                                
                                                    <article>

                                                         <a href="vue_produit_c.php?id=<?php echo $product[$i]['id']; ?>" >
                                                            <section>
                                                                <img alt="" src="../entreprise/produit/<?php echo $product[$i]['photo'];?>" />
                                                            </section>
                                                            <div>
                                                            <a href="control/add_panier.php?id=<?php echo $product[$i]['id']; ?>">
                         <span class="iconWrapper iconLink"><i class="icon-basket">
                                                                </i></span> 
                                                            </div>
                                                        </a>
                                                     
                               <section class="projectInfo"><h3><?php echo $product[$i]['nom']; ?></h3><p><?php echo $product[$i]['description']; ?></p><br><?php echo number_format ( $product[$i]['prix'],2,',',''); ?>$</section>

                                                    </article>
                                                     </div>
                                                    <?php } ?>
                                                    
                                                

                                            </div>
                                        </div>




                                    </div>
                                    <a class="left carousel-control" href="#projectCarousel" data-slide="prev"><i class="icon-left-circle"></i></a>
                                    <a class="right carousel-control" href="#projectCarousel" data-slide="next"><i class="icon-right-circle"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- carousel works-->







                <!-- Call to action -->
             
                <!-- Call to action -->



            </section> 
            
            <!-- content -->

            <!-- footer -->
         <?php include("footer.php"); ?>
         
            <!-- footer -->

        </div>
        <!-- Global wrapper -->

        <!-- End Document 
        ================================================== -->

        <script type="text/javascript" src="js-plugin/respond/respond.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>


        <!-- third party plugins  -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap-carousel.js"></script>
        <script type="text/javascript" src="js-plugin/easing/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js-plugin/pretty-photo/js/jquery.prettyPhoto.js"></script>
<!--        <script type="text/javascript" src="js-plugin/jquery-cookie/jquery.cookie.js"></script>-->
        <script type="text/javascript" src="js-plugin/seaofclouds-tweet/tweet/jquery.tweet.js"></script>
        <script type="text/javascript" src="js-plugin/hoverdir/jquery.hoverdir.js"></script>

        <!-- jQuery KenBurn Slider  -->
        <script type="text/javascript" src="js-plugin/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js-plugin/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

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
