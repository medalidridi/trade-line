
<form action="control/contact.php" method="post">
  <fieldset>
  <legend>Formulaire de contact</legend>
 <label for="email" style="display:inline-block;width:100px;"><strong>Votre Email:</strong></label> <input type="text" name="email" id="email" /><br />
 <label for="sujet" style="display:inline-block;width:100px;"><strong>Sujet:</strong></label> <input type="text" name="sujet" id="sujet" /><br />
  <label for="message"><strong>Message:</strong></label><br />
  <textarea cols="70" rows="4" name="message" id="message"></textarea><br />
  <input type="submit" value="Envoyer" />
  </fieldset>
</form>
