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
                            <li data-transition="fade" data-slotamount="1"  data-masterspeed="2000"> <img src="images/slider/rs/thumb.png" alt="slide"/>

                                <div class="caption lfr" data-x="50" data-y="26" data-speed="1000" data-start="300" data-easing="easeOutExpo"><img src="images/slider/rs/ohmy1.png" alt="slide" class="ie8PngFix"/></div>
                                <div class="caption sft" data-x="495" data-y="50" data-speed="300" data-start="600" data-easing="easeOutExpo" >
                                    <h2>OHMy! template</h2>
                                </div>
                                <div class="caption sfb hidden-phone" data-x="495" data-y="125" data-speed="300" data-start="700" data-easing="easeOutExpo"><h3><i class="icon-right-circle"></i>&nbsp;Fully Responsive Website Template</h3></div>
                                <div class="caption sfl hidden-phone" data-x="495" data-y="159" data-speed="500" data-start="1000" data-easing="easeOutBounce" >
                                    <h3><i class="icon-right-circle"></i>&nbsp;25 HTML templates</h3>
                                </div>
                                <div class="caption sfl hidden-phone" data-x="495" data-y="193" data-speed="500" data-start="1250" data-easing="easeOutBounce" >
                                    <h3><i class="icon-right-circle"></i>&nbsp;10 colors schemes / dark and light</h3>
                                </div>

                                <div class="caption sfb hidden-phone" data-x="495" data-y="270" data-speed="900" data-start="2000" data-easing="easeOutExpo" >

                                    <a href="http://themeforest.net/item/ohmy-html5-css3-bootstrap-website-template/3589661?ref=Little-Neko" class="btn btn-3d btn-3d-medium">Read More</a>

                                </div>


                                <div class="caption sfl hidden-phone" data-x="495" data-y="227" data-speed="500" data-start="1500" data-easing="easeOutBounce" >
                                    <h3><i class="icon-right-circle"></i>&nbsp;Easy to customize</h3>
                                </div>



                            </li>


                            <li data-transition="fade" data-slotamount="2"> <img src="images/slider/rs/thumb.png" alt="slide"/>

                                <div class="caption lfl" data-x="450" data-y="65" data-speed="900" data-start="800" data-easing="easeOutBack"><img src="images/slider/rs/ohmy3.png" alt="slide" class="ie8PngFix"/></div>
                                <div class="caption sft" data-x="70" data-y="120" data-speed="300" data-start="1600" data-easing="easeOutExpo" >
                                    <h2>HTML5 & CSS3</h2>
                                </div>

                                <div class="caption sfb hidden-phone" data-x="72" data-y="271" data-speed="900" data-start="2500" data-easing="easeOutExpo" >

                                    <a href="http://themeforest.net/item/ohmy-html5-css3-bootstrap-website-template/3589661?ref=Little-Neko" class="btn btn-3d btn-3d-medium">Read More</a>

                                </div>
                                <div class="caption lfr hidden-phone" data-x="72" data-y="194" data-speed="500" data-start="1500" data-easing="easeInExpo" >
                                    <h3><i class="icon-right-circle"></i>&nbsp;CSS3 shapes and shadows</h3>
                                </div>
                                <div class="caption lfr hidden-phone" data-x="72" data-y="228" data-speed="500" data-start="1700" data-easing="easeInExpo" >
                                    <h3><i class="icon-right-circle"></i>&nbsp;Gracefully degrades on old browsers</h3>
                                </div>




</li>

                            <li data-transition="fade" data-slotamount="1"> <img src="images/slider/rs/thumb.png" alt="slide" />

                                <div class="caption lfr" data-x="0" data-y="60" data-speed="800" data-start="300" data-easing="easeOutBack"><img src="images/slider/rs/screen1.png" alt="slide" class="ie8PngFix"/></div>
                                <div class="caption lfl" data-x="150" data-y="200" data-speed="600" data-start="700" data-easing="easeOutExpo"><img src="images/slider/rs/screen2.png" alt="slide" class="ie8PngFix"/></div>
                                <div class="caption lfb" data-x="250" data-y="300" data-speed="400" data-start="1000" data-easing="easeOutBack"><img src="images/slider/rs/screen3.png" alt="slide" class="ie8PngFix"/></div>
                                <div class="caption sft" data-x="465" data-y="48" data-speed="300" data-start="500" data-easing="easeOutExpo" >
                                    <h2>Fully responsive, </h2>
                                </div>
                                <div class="caption sft" data-x="465" data-y="102" data-speed="300" data-start="700" data-easing="easeOutExpo" >
                                    <h2>awesome, huh??</h2>
                                </div>

                                <div class="caption sfb hidden-phone" data-x="467" data-y="287" data-speed="900" data-start="1500" data-easing="easeOutExpo" >
                                    <a href="http://themeforest.net/item/ohmy-html5-css3-bootstrap-website-template/3589661?ref=Little-Neko" class="btn btn-3d btn-3d-medium">Read More</a>
                                </div>
                                <div class="caption sfl hidden-phone" data-x="467" data-y="176" data-speed="500" data-start="900" data-easing="easeOutBounce" >
                                    <h3><i class="icon-right-circle"></i>&nbsp;Lightweight Bootstrap 960 grid</h3>
                                </div>
                                <div class="caption sfl hidden-phone" data-x="467" data-y="210" data-speed="500" data-start="1100" data-easing="easeOutBounce" >
                                    <h3><i class="icon-right-circle"></i>&nbsp;Responsive Grid Down To Mobile</h3>
                                </div>
                                <div class="caption sfl hidden-phone" data-x="467" data-y="244" data-speed="500" data-start="1300" data-easing="easeOutBounce" >
                                    <h3><i class="icon-right-circle"></i>&nbsp;Looks great on tablets & Smartphones </h3>
                                </div>

                            </li>
                            <li data-transition="fade" data-slotamount="2"> <img src="images/slider/rs/thumb.png" alt="slide"/>

                                <div class="caption lfl" data-x="400" data-y="30" data-speed="900" data-start="800" data-easing="easeOutBack"><img src="images/slider/rs/ohmy2.png" alt="slide" class="ie8PngFix"/></div>
                                <div class="caption sft" data-x="50" data-y="60" data-speed="300" data-start="1600" data-easing="easeOutExpo" >
                                    <h2>Build with bootstrap</h2>
                                </div>
                                <div class="caption lfr hidden-phone" data-x="52" data-y="134" data-speed="500" data-start="1500" data-easing="easeInExpo" >
                                    <h3><i class="icon-right-circle"></i>&nbsp;Sleek, intuitive, and powerful</h3>
                                </div>
                                <div class="caption lfr hidden-phone" data-x="52" data-y="168" data-speed="500" data-start="1700" data-easing="easeInExpo" >
                                    <h3><i class="icon-right-circle"></i>&nbsp;Mobile-Friendly Development </h3>
                                </div>

                                <div class="caption sfb hidden-phone" data-x="52" data-y="246" data-speed="900" data-start="2500" data-easing="easeOutExpo" >

                                    <a href="http://themeforest.net/item/ohmy-html5-css3-bootstrap-website-template/3589661?ref=Little-Neko" class="btn  btn-3d btn-3d-medium">Read More</a>

                                </div>

                                <div class="caption lfr hidden-phone" data-x="52" data-y="202" data-speed="500" data-start="1800" data-easing="easeInExpo" >
                                    <h3><i class="icon-right-circle"></i>&nbsp;Dozen of shortcodes</h3>
                                </div>
                            </li>

                        </ul>
                        <div class="tp-bannertimer"></div>

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

                                                        <a href="images/works/work1-big.jpg" class="prettyPhoto">
                                                            <section>
                                                                <img alt="" src="produit/<?php echo $product[$i]['photo'];?>" />
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
