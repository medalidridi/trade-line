<?php include("menu.php"); ?>
        <!-- header --> 


        <!-- global wrapper -->    
        <div id="globalWrapper">


            <!-- page content -->
            <section id="content">

                <header class="headerPage">
                    <div class="container clearfix">
                        <div class="row">
                            <h1 class="span8">Contact  <span>us </span></h1>
                            
                        </div>
                    </div>
                </header>



                <div class="slice clearfix">
                    <div class="container">
                        <div class="row"> 
                            <!-- contact intro -->
                            <div class="span3">

                                <p></p>
                            </div>
                            <!-- contact intro -->


                            <!-- contact form -->
                            <div class="span6">
                            <?php
if(isset($_POST['email']) and isset($_POST['sujet']) and isset($_POST['message']))
{
 $destinataire = 'med.ali.dridi.tn@gmail.com';
  $email = htmlentities($_POST['email']);
  if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',str_replace('&amp;','&',$email)))
  {
  $sujet = 'Contact: '.stripslashes($_POST['sujet']);
  $message = stripslashes($_POST['message']);
  $headers = "From: <".$email.">\n";
  $headers .= "Reply-To: ".$email."\n";
  $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
  ini_set('SMTP','smtp.topnet.tn');  
  if(mail($destinataire,$sujet,$message,$headers))
  {
  echo "<strong>Votre message a bien &eacute;t&eacute; envoy&eacute;.</strong>";
 }
 else
  {
 echo "<strong style=\"color:#ff0000;\">Une erreur c'est produite lors de l'envois du message.</strong>";
  }
  }
  else
  {
  echo "<strong style=\"color:#ff0000;\">L'email que vous avez entr&eacute; est invalide.</strong>";
  }
}
else
{
?>

                                <form method="post" action="" id="contactform">

                                    <label for="name"></label>
                                    <input type="text" name="name" id="name" placeholder="Name" class=""/>

                                    <label for="email"></label>
                                    <input type="text" name="email" id="email" placeholder="Email" class=""/>

                                    <label for="phone"></label>
                                    <input name="phone" type="text" id="phone" size="30" value="" placeholder="Phone"/>
                                     <label for="sujet"></label>
                                    <input name="sujet" type="text" id="sujet" size="30" value="" placeholder="sujet"/>

                                    <label for="message"></label>
                                    <textarea name="message" id="message" cols="3" rows="5" placeholder="message" class=""></textarea>


                                    <fieldset class="clearfix securityCheck">
                                        <legend>Security</legend>

                                        <div class="pull-left humanCheck">
                                            <label> Are you human?</label>
                                            <label for="verify" class="pull-left"><img src="js-plugin/ajax-contact-extend/classes/image.php" alt="Image verification" border="0"/></label>
                                            <input class="span2"  id="verify" name="verify" type="text">
                                        </div>


                                        <div class="pull-right termsCheck">
                                            <label for="agree" class="checkbox">Agree to terms
                                                <input type="checkbox"  name="agree" id="agree">
                                                <a href="#" class="moreLink" title="read our terms">&rarr; our terms</a>
                                            </label>
                                        </div>

                                    </fieldset>
                                    
                                    <br/>

                                    <button name="Envoyer" type="submit" > Envoyer</button>

                                </form>


<?php } ?>

                                <div id="message"></div>
                            </div>
                            <!-- contact form -->

                            <!-- address bloc -->
                            <div class="span3">
                               
                            </div>
                            <!-- address bloc -->
                        </div>
                    </div>
                </div>



                <!-- map -->
                <div id="mapWrapper"></div>  
                <!-- map -->    

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

        </script>
    </body>
</html>
