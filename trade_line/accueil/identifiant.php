<?php include("menu.php"); ?>
<?php include("etapes_paiement2.php"); ?>    


        <!-- global wrapper -->    
        <div id="globalWrapper">


            <!-- page content -->
            <section id="content">

                
 


                <div class="slice clearfix">
                    <div class="container">
                        <div class="row"> 
                            <!-- contact intro --><!-- contact intro -->


                            <!-- contact form -->
                       
<table Style="width: 100%;">
       <tr>
           <td Style="width: 50%;border-right:1px solid #999;padding-right: 77px;">
           <br><br>
               <h3 class="page-subheading">Deja Inscrit? </h3>
               
               <label>Adresse E-mail </label>
       
                                <form method="post" action="control/cnx.php" >

                                   
                                    <input type="text" name="email" id="email"  placeholder="E-mail"/>

                                   <label >Mot de passe </label>
                                    <input type="password" name="pwd" id="pwd" />
                                    
                                   <a href="#">Mot de passe oublié?</a> 
<ul>

<li> <Button type="submit" name="connexion" class="btn btn-3d btnSmall" >
<span> 
<i class="icon-lock left">
</i>
Connexion

</span>
</Button>
</li>
</ul>                               

                                </form>
                                
                                
                                </td>
                                
                                <td Style="width: 50%;paddind-left:15px;padding-left: 77px;">
                                
                                 <form method="post" action="creation_compte.php"  >

                                   <h3 class="page-subheading">Creer Votre Compte </h3>
                                   <p Style="border-bottom:1px solid #ccc; color:#323732">Saisissez Votre Adresse E-mail Pour Creer Votre Compte</p>
                                   
                                   <label for="email">Adresse E-mail </label>
                                    <input type="text" name="email" id="email" placeholder="Votre e-mail" size="50" maxlength="30"   />

                                   
                                    
                                   
<ul>

<li> <Button type="submit" name="connexion" class="btn btn-3d btnSmall" >
<span> 
<i class="icon-user-1 left">
</i>
Creer Compte

</span>
</Button>
</li>
</ul>                              

                                </form>
                                
                                </td>
                                </tr>
                                </table>

                               
                            <!-- contact form -->

                            <!-- address bloc -->
                            
                            <!-- address bloc -->
                        </div>
                    </div>
                </div>



                <!-- map --><!-- map -->    

            </section>
            <!-- page content -->

            <!-- footer -->
           <?php include("footer.php"); ?>
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




$("#passwordfield").on("keyup",function(){alert("hai");
    if($(this).val())
        $(".glyphicon-eye-open").show();
    else
        $(".glyphicon-eye-open").hide();
    });
$(".glyphicon-eye-open").mousedown(function(){
                $("#passwordfield").attr('type','text');
            }).mouseup(function(){
            	$("#passwordfield").attr('type','password');
            }).mouseout(function(){
            	$("#passwordfield").attr('type','password');
            });

        </script>
        
        
        
        
        
    </body>
</html>
