<?php session_start();
if (isset($_SESSION['id']))
{
$id=$_SESSION['id'];
}
else
{
echo "<script language='javascript'> 
parent.location.href='connexion_entreprise.php'</script>";	
}
?>
            <?php include("menu_connecte.php"); ?>



        <!-- global wrapper -->    
        <div id="globalWrapper">


            <!-- page content -->
            <section id="content" >

                <header class="headerPage">
                    <div class="container clearfix">
                        <div class="row">
                            <h1 class="span8">Produit <span></span></h1>
                            <div class="span4" id="navTrail"> 
                                <a href="index.php" class="homeLink">home</a><span>/</span><span class="current">contact 2</span>
                          
                            </div>
                        </div>
                    </div>
                </header>



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
$u=new entreprise();
$res=$u->affentreprisebyid($id);

?>

                              <form action="control/addproduit.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                              
<table width="347" border="0">
  <tr>
    <td width="69">nom :</td>
    <td width="268"><input type="text" name="nom"  class="form-control"id="nom" required/></td>
  </tr>
  <tr>
    <td>prix</td>
    <td><input type="text" name="prix"  class="form-control"id="prix" required/></td>
  </tr>
  <tr>    <td>secteur</td>
    <td><select name="secteur" class="form-control">
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
    </select></td>
  </tr>
  
  
  
  
    <tr>    <td>categorie</td>
    <td><select name="categorie" class="form-control">
    	<?php
		include("model/categorie.php");
		$u=new categorie();
		$res=$u->Affcategorie();
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
    </select></td>
  </tr>
  
  
  <tr>
    <td>description</td>
    <td><input type="text" name="description" class="form-control" id="description" /></td>
  </tr>
  <tr>
    <td>Stock</td>
    <td><input type="number" name="stock" min="0" max="150" class="form-control" id="stock" /></td>
  </tr>
  <tr> <td>Photo</td>
    <td><input name="photo" type="file" required/></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="ajouter" class="btn btn-primary" id="ajoute" value="ajouter" /></td>
  </tr>
</table>


</form>

                                <div id="message"></div>
                            </div>
                            <!-- contact form -->

                          
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
