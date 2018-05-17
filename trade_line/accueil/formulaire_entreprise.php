
                       <?php include("menu.php"); ?>

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

                                <form action="control/addentreprise.php" method="post">

                                    
                                                                                                                                                                                                <table> 
                                                          
                         <tr>                        
                         <td><p><label for="nomsoc">  NOM SOCIETE:<sup style="color:#F00">*</sup> </label></td><td><input type="text" name="nom" id="nomsoc"  class="" required/> </p></td>
                         </tr>
                                                                                                                                                           <tr>                        
                         <td><p><label for="nomprop">  NOM PROPRIETAIRE:<sup style="color:#F00">*</sup> </label></td><td><input type="text" name="nomprop" id="nomprop"  class="" required/> </p></td>
                         </tr>                                     
                         
                         <tr>                        
                         <td><p><label for="numtva">  NUMERO DE TVA:<sup style="color:#F00">*</sup></label> </td><td><input type="text" name="numtva" id="numtva"  class="" required/></p> </td>
                         </tr>
                         
                         <tr>                        
                         <td><p><label for="rc">  REGISTRE COMMERCIALE:<sup style="color:#F00">*</sup></label> </td><td><input type="text" name="rc" id="rc"  class="" required/> </p></td>
                         </tr>
                                                      
                            <tr>                           
                                <td><p><label for="login"> LOGIN:<sup style="color:#F00">*</sup></label></td><td> <input type="text" name="login" id="login" required/>   </p></td>
                            </tr>
                            
                            <tr>                                                          
                                <td><p><label for="pwd">  MOT DE PASSE:<sup style="color:#F00">*</sup> </label></td><td><input type="password" name="pwd" id="pwd" required/></p> </td>
                            </tr> 
                            
                             
                            <tr>                                                          
                                <td><p><label for="cpwd"> CONFIRMER MOT DE PASSE:<sup style="color:#F00">*</sup> </label></td><td><input type="password" name="cpwd" id="cpwd" required/></p> </td>
                            </tr>                                                               
                           
                            <tr>
                             <td><p><label for="email">  EMAIL:<sup style="color:#F00">*</sup> </label></td><td> <input type="email" name="email" id="email" required/></p></td>
                           </tr>

 <tr>
                             <td><p><label for="description">  DESCRIPTION: </label></td><td> <textarea name="description" id="description" ></textarea></p></td>
                           </tr>

                             <tr>
                                 <td><p><label for="tel"> TELEPHONE:  </label></td><td> <input name="tel" type="tel" id="tel" size="30" /></p></td>
                             </tr>
                             <tr>
                                 <td><p><label for="adresse">ADRESSE:<sup style="color:#F00">*</sup>  </label></td><td>
                                 <input type="text" name="adresse" id="adresse" required/></p></td>
                              </tr>  
                              
                              <tr>
                              <td><p><label for="secteur">Secteur:</label></p></td>
                              <td>
                              
                                  
 <select name="secteur" >
    	<?php
		include("model/secteur.php");
		$u=new secteur();
		$res=$u->Affsecteur();
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
  
   </td></tr>
                                
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

<li> <Button type="submit" name="connexion" class="btn btn-3d btnSmall" style="margin-left: -104px;" value="inscrire" >
<span> 
inscrire
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
