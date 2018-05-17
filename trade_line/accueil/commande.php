<?php session_start();
if (isset($_SESSION['id']))
{
$id=$_SESSION['id'];

}
else
{
echo "<script language='javascript'> 
parent.location.href='identifiant.php'</script>";	
}
?>
<?php include("menu_connecte.php"); ?>
<?php include("etapes_paiement4.php"); ?>



                    </div>
                </div>
            </div>
        </header>
        <!-- header --> 
       
<div class="popupbg"></div>
<div class="popupbox">

</div>

<?php $id=$_GET['id']; 
$id_session=session_id();
?>
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


                                <form action="control/modif_commande.php?id=<?php echo $id; ?>" method="post">

                                    
                                     <h3 class="page-subheading">choisissez votre methode de paiement </h3>                                                                                                                                                            
                                            <table>
                                            <tr><td>
                         <p><label for="paiement electronique">  </label> <input type="radio" name="type" id="paiement_electronique" value="paiement electronique" class="" required/> &nbsp;paiement electronique </p> </td><td><i class="icon-credit-card" style="
    font-size: 300%;
    margin-left: 38px;
"></i></td>
<input type="hidden" name="session" value="<?php echo $id_session?>"/>
                         </tr>
                       
                              <tr><td>               
           <p><label for="livraison"> </label> <input type="radio" name="type" value="paiement à livraison" id="livraison"  class=""/> &nbsp;paiement à livraison en espèce  </p> 
             </td><td>
         <i class="icon-truck" style="
    font-size: 300%;
    margin-left: 38px;
"></i></td></tr>
                         
</table>
                             <h3 class="page-subheading">Condition générales de vente </h3>   
                            
   
                                                
                         <p> <span class="popuplink"><textarea disabled>Les conditions générales de vente couvrent les relations commerciales actuelles et futures existantes entre :    
MEZIANA POINT NET.SARL (Société  à responsabilité limitée) ayant la marque commerciale "ARTSDETUNISIE"('Nous') et le donneur d’ordre  de la commande ("Vous").
 
 MEZIANA POINT NET gère le site web E-marchand et la boutique électronique et pourra modifier les présentes conditions générales de vente à tout moment sous réserve de faire apparaître ces modifications sur la page dédiée à ces conditions sur le  site web.
 
MEZIANA POINT NET reste à votre entière disposition pour toute consultation relative à des conditions générales que Vous auriez souhaité et formulée  via mail , courrier , téléphone ou tout autre moyen .Notre acceptation ou refus des nouvelles conditions générales proposées  ne seront applicables que si expressément notifié par écrit.

1. COMMANDES

MEZIANA POINT NET répondra à votre commande dans la limite de nos stocks disponibles ou sous réserve des stocks disponibles chez nos artistes et artisans.
En confirmant votre commande, vous acceptez l'intégralité des présentes conditions générales de vente mises à votre disposition sur le site, et reconnaissez en avoir une parfaite connaissance, renonçant de ce fait à Vous prévaloir de tout document contradictoire, et notamment de vos propres conditions générales d'achat, l'acte d'achat entraînant acceptation de ces conditions générales de vente. Cette confirmation ainsi que l'ensemble des données que MEZIANA POINT NET aura enregistrées constitueront la preuve de nos transactions.

2. DISPONIBILITÉ DES ARTICLES

Notre catalogue, est mis à jour sur la bases des  informations communiquées par nos artistes, artisans et  fournisseurs. Cette base de données comporte une importante quantité d'articles, aussi la totalité n'est pas stockée dans nos réserves et notre offre est alors conditionnée à la disponibilité des articles chez les  artistes, les artisans et les fournisseurs. Les éventuelles ruptures de stocks ne sauraient en conséquence nous être imputées.
MEZIANA POINT NET vous informera par mail  dans un délai ne dépassant pas 48 heures à partir de la date de réception de votre commande (délai minimum nécessaire vu que certains de nos artistes et artisans sont indisponibles 2 jours par semaine).
Important : les articles non disponibles ne sont supprimés de notre boutique que si la rupture nous est signalée comme définitive de la part du fournisseur (épuisé) ; dans les autres cas, vous pourrez repasser commande des articles manquants. Ils vous seront livrés sous réserve de disponibilité chez le fournisseur.
Certains articles de collections sont disponibles en nombre limité (Articles de  Grotte et Rareté) , voire en un seul exemplaire . 
 
3. PRIX

Nos prix sont en Dinars Tunisiens, frais  de traitement de votre commande inclus. Ils sont modifiables à tout moment sans préavis, sachant que les articles seront facturés sur la base en vigueur à la passation  de la commande.
Les prix affichés sont toutes taxes comprises TTC.
L'équivalent des  prix indiqués en devises étrangères peut varier  suivant le cours du change des devises au moment de la commande. 

4. PAIEMENT ET SECURITÉ

Le prix est exigible immédiatement à la date de la commande:
-On accepte toutes les cartes VISA ou MASTER CARD.
-Vous pouvez aussi payer en alimentant notre carte e-Dinar SMART 5359401024589356  avec le montant de la commande puis envoyer un Email à contact@artsdetunisie.com avec votre numéro de reçu de la poste.

Le client dispose d’un moyen de  paiement offrant un maximum de garanties de sécurité: Il règle par sa carte bancaire, en indiquant directement dans la zone sécurisée  conforme aux normes de Visa et Master Card (avec une saisie sécurisée par cryptage SSL sur HTTPS) les informations relatives à la carte bancaire.Le serveur de paiement sécurisé est certifié  par "VeriSign Trust Network"avec un chiffrement de haut niveau RC4 sur 128 bits.
 
5. LIVRAISON

Sauf disposition contraire, la livraison est faite à l'adresse de livraison  que vous avez indiquée lors de votre commande. Une livraison à une adresse différente  de l’adresse de facturation peut être exécutée par MEZIANA POINT NET (comme dans le cas des cadeaux) .  Les risques seront à votre charge à compter de la date à laquelle les produits commandés auront quitté nos locaux. Les produits de vente vous seront livrés à l’adresse indiquée lors de la saisie de votre commande. Compter en moyenne trois jours ouvrables  pour le traitement et l’envoi Rapide Poste International   (Par   FEDEX ou DHL)  et entre dix et quinze jours ouvrables pour le traitement et  l’envoi Ordinaire par avion des articles à destination l’Europe et l'Amérique.
Les délais de livraison sont  à titre indicatif et sont susceptibles de varier en fonction de la destination plus ou moins éloignée du client , des perturbations du trafic aérien (grèves ou annulations de vols) etc..
Les produits «  personnalisé, sur commande » nécessitent un délai supplémentaire de fabrication et de personnalisation (mentionné dans la spécification de l’article choisi).

6. RETOURS ET REMBOURSEMENT

Nous respectons les lois de E-commerce :Loi n° 2000-83 du 9 août 2000, relative aux échanges et au commerce électroniques (J.O.R.T. N°64 du 11 août 2000)
Nos articles sont fait à la main, (des défauts mineurs ou des non conformité par rapport aux tailles déclarées sur la boutique peuvent apparaître). Dans le cas ou un article présente un défaut, nous nous engageons à vous l'échanger ou le rembourser, sous réserve qu'il nous soit retourné dans son emballage d'origine et accompagné de la facture correspondante dans les 20 jours suivant la réception du colis à  l'adresse de MEZIANA POINT NET indiquée dans la rubrique contact.
Les frais de retour vous seront alors également intégralement remboursés (hors frais de port) et l'échange mis en œuvre immédiatement.  Aucun envoi en contre remboursement ne sera accepté, quel qu'en soit le motif.
En dehors du cas d'un défaut quelconque, nos clients bénéficie également d'un droit de retour : quelle qu'en soit la raison, vous pouvez nous retourner un article dans les sept jours suivant la réception de votre colis (dans son emballage d'origine et avec la facture correspondante) à : L'adresse postale de MEZIANA POINT NET ; Dans ce cas, les frais d'envoi et de retour restent à votre charge. Attention : cette garantie ne s'applique pas aux produits immédiatement reproductibles descellés : votre article vous sera donc échangé ou remboursé dans les meilleurs délais, sous réserve qu'il soit intact et sans trace d'utilisation. 

7. DROIT D'ACCÈS ET DE RECTIFICATION
Dans le but d'assurer la protection de votre vie privée, MEZIANA POINT NET traite toutes les informations personnelles dans la plus stricte confidentialité. Lors de vos achats, nous ne vous demandons que les informations indispensables (nom, prénom, Téléphone, adresse, e-mail) pour un traitement de qualité et un suivi attentif de votre commande. 
Vos droits conformément  à la loi informatique et Libertés vous disposez d'un droit d'accès et de rectification des données vous concernant.
Vous pouvez exercer ce droit en nous envoyant mail à contact@artsdetunisie.com.
 
8. CAS DE FORCE MAJEURE
La responsabilité de MEZIANA POINT NET ne pourra être engagée dans le cas de force majeure tel que grèves, incendies, catastrophes naturelles, ou autres ; cette liste n'étant pas exhaustive. 

9. DROIT APPLICABLE
Toutes les clauses figurant dans les présentes conditions générales de vente, ainsi que toutes les opérations d'achat et de vente qui y sont visées, seront soumises au droit Tunisien, sous le ressort du tribunal de Tunis, tribunal du siège social de MEZIANA POINT NET (Arts De Tunisie) , qui gère le site web commercial  et où est formé le contrat entre les parties. 

10. ACCEPTATION DE L'ACHETEUR
Les présentes conditions générales de vente ainsi que les tarifs sont expressément agréés et acceptés par l'Acheteur, qui déclare et reconnaît en avoir une parfaite connaissance, et renonce, de ce fait, à se prévaloir de tout document contradictoire et, notamment, ses propres conditions générales d'achat, l'acte d'achat entraînant acceptation des présentes conditions générales de vente. Les présentes conditions sont modifiables à tout moment sans préavis.

</textarea></span>  <label for="condition"> </label> <input type="checkbox" name="condition" id="condition"  class="" required/> &nbsp;l'ai lu les conditions générales de vente et j'y adhère sans réserve</p> 
                                                     <ul>

<li> <Button type="reset" name="reset" class="btn btn-3d btnSmall" style="margin-left: 224px;" >
<span> 
Annuler
<i class="icon-cancel-circle right">
</i>
</span>
</Button>
</li>
</ul> <ul>

<li> <Button type="submit" name="enregistrer" class="btn btn-3d btnSmall" style="margin-left: 73%;margin-top: -92px;" >
<span> 
Enregistrer
<i class="icon-ok-circle right">
</i>
</span>
</Button>
</li>
</ul>



                                   
  
               
                                      
        

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
