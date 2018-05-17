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
 }}}
?>
