<?php session_start();
if (isset($_SESSION['id']))
{

	$identifiant=$_GET['id'];
	$id=session_id();
	
if($identifiant != $_SESSION['id']){
		echo "<script language='javascript'> 
parent.location.href='identifiant.php'</script>";
		
		}



}
else
{
echo "<script language='javascript'> 
parent.location.href='connexion_client.php'</script>";	
}
?>



<?php include("menu_connecte.php"); ?>
<?php include("etapes_paiement3.php"); ?>





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

                                <?php
$id=$_GET['id'];

$u=new client();
$res=$u->affclientbyid($id);

?>

                               
                                <form action="control/modif_adresse.php?id=<?php  echo $id; ?>" method="POST">

                                                                                                                                                                                                            <table> 
                         <tr>                        
                         <td><p><label for="nom">  NOM :<sup style="color:#F00">*</sup> </label> </td><td><input type="text" name="nom" id="nom" value="<?php echo $res['nom'];?>" class=""/> </p> </td>
                         </tr> 
                         <tr>                        
                         
                         <td><p><label for="prenom">  PRENOM :<sup style="color:#F00">*</sup> </label> </td><td><input type="text" name="prenom" id="prenom" value="<?php echo $res['prenom'];?>" class=""/> </p></td>
                         </tr>
                         
                         <tr>
                                 <td><p><label for="adresse">  ADRESSE :<sup style="color:#F00">*</sup> </label> </td><td>
                                 <input type="text" name="adresse" id="adresse" value="<?php echo $res['adresse'];?>" /></p></td>
                              </tr>  
                               <tr>
                                 <td><p><label for="code"> CODE POSTAL :<sup style="color:#F00">*</sup> </label></td><td>
                                 <input type="text" name="code_postal"  value="<?php echo $res['code_postal'];?>" id="code" required/></p></td>
                              </tr>
                               
                               <tr>
                                 <td><p><label for="pays">  PAYS:<sup style="color:#F00">*</sup> </label> </td><td>
                                 <select name="pays">
                                 <option value="Tunisie">Tunisie</option>
                                 <option value="France">France</option>
                                 <option value="Allemagne">Allemagne</option>
                                 <option value="Dubai">Dubai</option>
                                 </p></td>
                              </tr>
                               
                               <tr>
                                 <td><p><label for="ville">  VILLE :<sup style="color:#F00">*</sup> </label></p></td><td>
                                 <input type="text" name="ville"  value="<?php echo $res['ville'];?>" id="ville"  required/></p></td>
                              </tr>
                              
                         
                             <tr>
                                 <td><p><label for="telf"> TELEPHONE FIX :</label> </td><td> <input name="telf" type="tel" id="telf" size="30"  /></p></td>
                             </tr>
                             
                              <tr>
                                 <td><p><label for="telm"> TELEPHONE MOBILE: </label> </td><td> <input name="telm" type="tel" id="telm" size="30" value="<?php echo $res['tel'];?>" /></p></td>
                             </tr>
                             
                              
                             </tr> 
 <tr>
                             <td><p><label for="description">  INFORMATION SUPPLEMNTAIRE :</label> </td><td> <textarea name="description" id="description" ></textarea></p></td>
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

<li> <Button type="submit" name="enregistrer" class="btn btn-3d btnSmall" style="margin-left: -116px;" value="Enregistrer">
<span> 
Enregistrer
<i class="icon-ok-circle right">
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
