  <?php include("menu.php"); ?>
<?php include("etapes_paiement2.php"); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- header --> 



        <!-- global wrapper -->    
        <div id="globalWrapper">


            <!-- page content -->
            <section id="content" >

              



                <div class="container clearfix slideContactpage">
                    <div class="row">
                        <div id="contactinfoWrapperPage" class="clearfix">
                            <div class="span3">
                                <p>&nbsp;</p>
                            </div>

                            <!-- contact form -->
                            <div class="span6">

                                <form method="post" action="control/addclient.php" >
                                
                                   
                                   
                         <table>
                         <tr>
                            	<td><p><label for="civilite">   CIVILITE :<sup style="color:#F00">*<sup> </label></td>
                                <td> <input type="radio"  name="civilite" value="M." required/>M.
                                     <input type="radio"  name="civilite" value="Mme"/>Mme
                                     <input type="radio"  name="civilite" value="Mlle"/>Mlle
                                 </p></td>
                            </tr>
                          
                         <tr>                        
                         <td><p><label for="nom">  NOM :<sup style="color:#F00">*<sup> </label></td><td><input type="text" name="nom" id="nom"  class="" required/> </p></td>
                         </tr>                                                                                                                                
                         <tr>
                          <td><p><label for="prenom"> PRENOM :<sup style="color:#F00">*<sup> </label></td><td><input type="text" name="prenom" id="prenom" required/></p></td>
                          </tr>
                          
                          <tr>
                          <td><p><label for="date"> DATE DE NAISSANCE:<sup style="color:#F00">*<sup></label></td>
                          <td>
                     
                     <input type="date" name="date" id="date" value="jj/mm/aaaa" required/>
               </p>
                           </td>
                           </tr>
                           
                             <tr>
                             <td><p><label for="email">  EMAIL : <sup style="color:#F00">*<sup></label></td><td> <input type="email" name="email" id="email" required/></p></td>
                           </tr>

                            <tr>                           
                                <td><p><label for="login"> LOGIN :<sup style="color:#F00">*<sup></label></td><td> <input type="text" name="login" id="login" required/>   </p></td>
                            </tr>
                            <tr>                                                          
                                <td><p><label for="pwd">  MOT DE PASSE :<sup style="color:#F00">*<sup></label> </td><td><input type="password" name="pwd" id="pwd" required/></p> </td>
                            </tr>
                            <tr>                                                          
                                <td><p><label for="cpwd"> CONFIRMER MOT DE PASSE:<sup style="color:#F00">*<sup></label> </td><td><input type="password" name="cpwd" id="cpwd" required/> </p></td>
                            </tr>
                             <tr>
                                 <td><p><label for="tel"> TELEPHONE :  </label></td><td> <input name="tel" type="tel" id="tel" size="30" /></p></td>
                             </tr>
                             <tr>
                                 <td><p><label for="adresse">  ADRESSE :<sup style="color:#F00">*<sup>  </label></td><td>
                                 <input type="text" name="adresse" id="adresse" required/></p></td>
                              </tr>  
                            
                            <tr>
                                <td><p><label for="dnc">  DNC :<sup style="color:#F00">*<sup> </label> </td><td><input type="text" name="dnc" id="dnc" required/></p></td>
                           </tr> 
                           <tr><td><p> <sup style="color:#F00">*</sup>: Champs requis </p></td></tr>
                           
                           <tr>
                           <td></td>
                           <td >                            <ul>

<li> <Button type="reset" name="reset" class="btn btn-3d btnSmall" style="margin-left: 63px;" >
<span> 
Annuler
<i class="icon-cancel-circle right">
</i>
</span>
</Button>
</li>
</ul></td>
                           
                           <td> <ul>

<li> <Button type="submit" name="inscrit" class="btn btn-3d btnSmall" style="margin-left: -83px;" >
<span> 
S'inscrire 
<i class="icon-right-open right">
</i>
</span>
</Button>
</li>
</ul>

</td>

</tr>               
</table>

                                   

                                </form>

                                <div id="message"></div>
                            </div>
                            <!-- contact form -->

                            <div class="span3">
                                <address>
                                    Address:<br/>
                                    Himalaya Company<br/>
                                    77 Mass. Ave., E14/E15<br/>
                                    Cambridge, MA 02139-4307 USA <br/>
                                    <br/>
                                    phone:<br/>
                                    615.987.1234<br/>
                                </address>
                                <h2>MAP</h2>
                            </div>
                        </div>
                        <div class="span12"  id="mapSlideWrapper">
                            <div id="mapWrapper"></div>
                            <a href="" title="" id="mapReturn"><i class="icon iconReturn"></i> back</a> 
                        </div>
                    </div>
                </div>

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

        </script>
    </body>
</html>
