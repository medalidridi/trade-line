<?php include("model/panier1.php"); ?>
<?php $id_session=$_GET['id_client'] ?>

<?php

include("model/client.php");
$id_session=$_GET['id_client'];
$n=new panier();
$resi=$n->affclientbyid_panier($id_session);

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<script type="text/javascript">
function imprimer_page(){
  window.print();
}
</script>
<form action="" method="post">
<input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer cette page" />
<table style="width:100%;"><tr><td>
<table width="200" border="0" style="float:left;margin-left: 50%;">
  <tr>
    <th scope="col"><p><td class="caps center" style="height: 100px;"><br /><a href="commande.php"><img src="images/logo/logo_site.png"</td></a></p>
      Avenue Yasser Arafet , Sahloul , Sousse, 4051</th>
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
  </tr>
</table></td><td>
<table border="0" style="float:right;margin-right: 40%;">
  <tr>
    <th scope="col" style="
    border: 1px solid #000;
    padding: 7px 46px;-webkit-border-radius: 10px 10px 10px 10px;  background-color: #ccc;
border-radius: 10px 10px 10px 10px;
">Devis EN $ N° : TEMPO</th>
  </tr>
  <tr>
    <th scope="col"><div  style="float:left;  border: 1px solid #000;
  -webkit-border-radius: 10px 10px 10px 10px;
border-radius: 10px 10px 10px 10px;"><div style="  border-bottom: 2px solid #000;
  padding: 5px 25px;"><b>Page</b></div><div>1</div></div><div style="float:left;  border: 1px solid #000;
  -webkit-border-radius: 10px 10px 10px 10px;
border-radius: 10px 10px 10px 10px;"><div style="  border-bottom: 2px solid #000;
  padding: 5px 25px;"><b>Date</b></div><div><script language="javascript">
date = document.lastModified;
jour = date.charAt(3)+date.charAt(4);
mois = date.charAt(0)+date.charAt(1);
an = date.charAt(6)+date.charAt(7)+date.charAt(8)+date.charAt(9);
document.write(an,"/",mois,"/",jour);
</script></div></div><div style="float:left;  border: 1px solid #000;
 -webkit-border-radius: 10px 10px 10px 10px;
border-radius: 10px 10px 10px 10px;"><div style="  border-bottom: 2px solid #000;
  padding: 5px 25px;"><b>Client</b></div><div><?php echo $resi['nom'] ?></div></div></th>
  </tr>
</table></td></tr></table>
<br />
<table width="100%">
<tr><td Style="width:50%;"><div  style="float:left;  margin-left: 308px;  border: 1px solid #000;
  -webkit-border-radius: 10px 10px 10px 10px;
border-radius: 10px 10px 10px 10px;"><div style="  border-bottom: 2px solid #000;
  padding: 5px 25px;"><b>MODE DE REGLEMENT</b></div><div>Chèque à réception de facture
</div></div></td>
<td Style="width:50%;"><div  style="float:left;  border: 1px solid #000;
  -webkit-border-radius: 10px 10px 10px 10px;
border-radius: 10px 10px 10px 10px;margin-left: 19%;"><div style="  border-bottom: 2px solid #000;
  padding: 5px 25px;"><b>TVA Intracommunautaire
</b></div><div>FR888777666
</div></div></td></tr>

</table>
<table width="730" border="0" style="  margin: 0 auto;margin-top:30px;border:2px solid #000;" >
  <tr>
    <th width="115" scope="col" Style="border: 1px solid #000;">Reference</th>
    <th width="115" scope="col" Style="border: 1px solid #000;">Produits</th>
    <th width="115" scope="col" Style="border: 1px solid #000;">Quantite</th>
    <th width="115" scope="col" Style="border: 1px solid #000;">P.U</th>
    <th width="115" scope="col" Style="border: 1px solid #000;">TVA</th>
    <th width="115" scope="col" Style="border: 1px solid #000;">Total H.T</th>
  </tr>
  
  
  <?php
				  include("model/config.php");   
				  
				   $st = $db->query("SELECT COUNT(*) FROM panier WHERE id_session='$id_session'")->fetch();
				  $qte=$st['COUNT(*)'];
				  
				  
				   $stt = $db->query("SELECT * FROM panier WHERE id_session='$id_session'")->fetchAll();
		
				 $prixs = 0;
				 for ($k=0;$k<$qte;$k++){
	             
				   
				  $prixs += intval($stt[$k]['prix']);
				 
				 }
				  ?>
  <?php 
  $u=new panier();
  $res=$u->aff_panier($id_session);
  
  $w=new panier();
  $resultat=$w->Affproduit_panier($id_session);
  $tvatot=($prixs*18)/100 ;
  $prixttc=$tvatot+$prixs+0.5;
  for($i=0;$i<count($res);$i++)
  {
	  $tva=($res[$i]['prix']*18)/100 ;
	  
	  ?>
  
  <tr Style="border-left: 1px solid #000;border-right: 1px solid #000;">
    <td scope="row" Style="border-left: 1px solid #000;" ><?php echo $res[$i]['id_produit']; ?></td>
    <td Style="border-left: 1px solid #000;"><?php echo $resultat[$i]['nom']; ?></td>
    <td Style="border-left: 1px solid #000;"><?php echo $res[$i]['qte']; ?></td>
    <td Style="border-left: 1px solid #000;"><?php echo $res[$i]['prix']; ?></td>
    <td Style="border-left: 1px solid #000;"><?php echo $tva ?></td>
     <?php } ?>
    <td Style="border-left: 1px solid #000;"><?php echo $prixs; ?></td>
    
  </tr>

</table>



<div id="dww" style="position:absolute;left:999px;top:602px;z-index:3;"><table width=163 style="height:17px;"><tr><td class="l-14" valign=middle id="tz">&nbsp;&#32; <?php echo $prixttc ?></td></tr></table></div>
<div id="dww" style="position:absolute;left:860px;top:602px;z-index:3;"><table width=143 style="height:17px;"><tr><td class="l-7" valign=middle id="tz">TotalTTC&nbsp;&#32; :</td></tr></table></div>
<div id="dww" style="position:absolute;left:999px;top:582px;z-index:3;"><table width=163 style="height:18px;"><tr><td class="l-14" valign=middle id="tz">&nbsp;&#32; 0,500</td></tr></table></div>
<div id="dww" style="position:absolute;left:860px;top:582px;z-index:3;"><table width=143 style="height:18px;"><tr><td class="l-7" valign=middle id="tz">Timbre&nbsp;&#32;&nbsp;&#32;&nbsp;&#32;&nbsp;&#32;:</td></tr></table></div>
<div id="dww" style="position:absolute;left:999px;top:565px;z-index:3;"><table width=163 style="height:17px;"><tr><td class="l-14" valign=middle id="tz">&nbsp;&#32; <?php echo $tvatot ?></td></tr></table></div>
<div id="dww" style="position:absolute;left:860px;top:565px;z-index:3;"><table width=143 style="height:17px;"><tr><td class="l-7" valign=middle id="tz">TVA 18 %&nbsp;&#32; :</td></tr></table></div>
<div id="dww" style="position:absolute;left:631px;top:502px;z-index:3;"><table width=211 style="height:50px;"><tr><td class="l-15" valign=middle id="tz">Montant TVA</td></tr></table></div>

<div id="dww" style="position:absolute;left:556px;top:502px;z-index:3;"><table width=69 style="height:50px;"><tr><td class="l-16" valign=middle id="tz">Taux</td></tr></table></div>

<div id="dww" style="position:absolute;left:631px;top:530px;z-index:3;"><table width=211 style="height:17px;"><tr><td class="l-3" valign=middle id="tz">&nbsp;&#32; <?php echo $tvatot ?></td></tr></table></div>

<div id="dww" style="position:absolute;left:860px;top:506px;z-index:3;"><table width=143 style="height:17px;"><tr><td class="l-7" valign=middle id="tz">Total H.T.&nbsp;&#32; :</td></tr></table></div>
<div id="dww" style="position:absolute;left:999px;top:506px;z-index:3;"><table width=163 style="height:17px;"><tr><td class="l-14" valign=middle id="tz">&nbsp;&#32; <?php echo $prixs ?></td></tr></table></div>
<div id="dww" style="position:absolute;left:408px;top:807px;z-index:3;"><table width=309 style="height:17px;"><tr><td class="l-17" valign=middle id="tz">BIAT :&nbsp;&#32;&nbsp;&#32;&nbsp;&#32;&nbsp;&#32;&nbsp;&#32;&nbsp;&#32;08 902 000 16 10 00026 2 65</td></tr></table></div>
<div id="dww" style="position:absolute;left:408px;top:827px;z-index:3;"><table width=309 style="height:17px;"><tr><td class="l-17" valign=middle id="tz">AMEN BANK : 07 208 0047 101 109525 92</td></tr></table></div>
<div id="dww" style="position:absolute;left:408px;top:787px;z-index:3;"><table width=148 style="height:18px;"><tr><td class="l-17" valign=middle id="tz">CCB :</td></tr></table></div>


</body>
</html>
