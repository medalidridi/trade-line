<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>LOGO</title>
<style type="text/css">
#fact {
width: 800px;
margin:auto;    
}
#fact td {
border: 1px outset #999999;
padding:0 5px;  
}
#fact .caps {
font-variant: small-caps;
}
#fact .right {
text-align: right;
}
.center {
text-align: center;
}
#fact .bg {
background-color: #dadfd8;
}
#fact .bordernone {
border: none!important;
}
</style>
</head>
<script>
function calcul(form)
{
var quant1 = form.quant1.value;
var PUHT1 = form.PUHT1.value;
var STHT1 = Number(quant1*PUHT1);
form.STHT1.value = STHT1;
}
</script>
<body>
<form action="" method="post">
<table id="fact" border="0">
<tr>
<td class="caps center" style="height: 100px;">[LOGO 100 * 200]<br /><input type="text" class="caps" size="30" placeholder="[Url de l'image]" /></td>
<td class="caps center" colspan="4">FACTURE</td>
</tr>
<tr>
<td class="caps bg" style="width:210px"><input type="text" class="caps"  size="25" placeholder="[Nom de l'entreprise]" /></td>
<td class="caps center bg" style="width:110px" rowspan="2"># de Facture</td>
<td class="caps center bg" style="width:50px" rowspan="2">Date</td>
<td class="caps center bg" style="width:105px" rowspan="2">Code Client</td>
<td class="caps center bg" rowspan="2">Client</td>
</tr>
<tr>
<td class="caps bg"><input type="text" class="caps" size="25" placeholder="[Continent, Pays]" /></td>
</tr>
<tr>
<td class="center"> </td>
<td class="center"><input type="text" class="caps" size="10" placeholder="VSG[Date]" /></td>
<td class="center"><input type="text" class="caps" size="5" placeholder="[Date]" /></td>
<td class="center"><input type="text" class="caps" size="10" placeholder="#[#Client]" /></td>
<td class="center"><input type="text" class="caps" size="20" placeholder="[Nom du Client]" /><br />
<input type="text" class="caps" size="20" placeholder="[Continent, Pays]" /></td>
</tr>
</table><br />

<table id="fact" style="height: 500px;" border="0">
<tr>
<td class="caps center bg" style="width:50px">Code</td>
<td class="caps center bg">Description</td>
<td class="caps center bg" style="width:110px">Quantité</td>
<td class="caps center bg" style="width:110px">PU / $ HT</td>
<td class="caps center bg" style="width:110px">Montant / $ HT</td>
</tr>
<tr>
<td class="center">0001</td>
<td class="center"><input type="text" class="caps" size="40" placeholder="[ Nom du Produit ]" /></td>
<td class="center"><input type="text" class="right" name="quant1" size="5"  value="0" /></td>
<td class="center"><input type="text" class="right" name="PUHT1" size="5"  value="0.00" /></td>
<td class="center"><input type="text" class="right" name="STHT1" size="10" readonly="readonly" /></td>
</tr>
<tr>
<td class="center">0002</td>
<td class="center"><input type="text" class="caps" size="40" placeholder="[ Nom du Produit ]" /></td>
<td class="center"><input type="text" class="right" name="quant2" size="5"  value="0" /></td>
<td class="center"><input type="text" class="right" name="PUHT2" size="5"  value="0.00" /></td>
<td class="center"><input type="text" class="right" name="STHT2" size="10" readonly="readonly" /></td>
</tr>
<tr>
<td class="center">0003</td>
<td class="center"><input type="text" class="caps" size="40" placeholder="[ Nom du Produit ]" /></td>
<td class="center"><input type="text" class="right" name="quant3" size="5"  value="0" /></td>
<td class="center"><input type="text" class="right" name="PUHT3" size="5"  value="0.00" /></td>
<td class="center"><input type="text" class="right" name="STHT3" size="10" readonly="readonly" /></td>
</tr>
<tr>
<td class="bordernone" colspan="2" rowspan="6"> </td>
<td class="caps right bg" colspan="2">Sous-Total</td>
<td class="center"><input type="text" class="right" name="totalHT" size="10" readonly="readonly" /></td>
</tr>
<tr>
<td class="caps right bg" colspan="2">Taxe de Vente Provinciale <a title="5% du sous-total">[?]</a></td>
<td class="center"><input type="text" class="right" name="TVP" size="10" readonly="readonly" /></td>
</tr>
<tr>
<td class="caps right bg" colspan="2">Taxe de Vente Fédérale <a title="10% du sous-total">[?]</a></td>
<td class="center"><input type="text" class="right" name="TVF" size="10" readonly="readonly" /></td>
</tr>
<tr>
<td class="caps right bg" colspan="2">Port &amp; Manutention <a title="Prix du transport">[?]</a></td>
<td class="center"><input type="text" class="right" name="transport" size="10" value="0.00" /></td>
</tr>
<tr>
<td class="caps right bg" colspan="2">Frais de Douane</td>
<td class="center"><input type="text" class="right" name="douane" size="10" value="0.00" /></td>
</tr>
<tr>
<td class="caps center bg" colspan="2">Net à Payer<br />
<input class="bouton" type="button" onClick='
var quant1=parseInt(Somme=(parseInt(form.quant1.value)));
var PUHT1=parseFloat(Somme=(parseFloat(form.PUHT1.value)));
var STHT1=parseFloat(quant1*PUHT1);
form.STHT1.value=(Somme=(parseFloat(parseFloat(STHT1))));
var quant2=parseInt(Somme=(parseInt(form.quant2.value)));
var PUHT2=parseFloat(Somme=(parseFloat(form.PUHT2.value)));
var STHT2=parseFloat(quant2*PUHT2);
form.STHT2.value=(Somme=(parseFloat(parseFloat(STHT2))));
var quant3=parseInt(Somme=(parseInt(form.quant3.value)));
var PUHT3=parseFloat(Somme=(parseFloat(form.PUHT3.value)));
var STHT3=parseFloat(quant3*PUHT3);
form.STHT3.value=(Somme=(parseFloat(parseFloat(STHT3))));
var totalHT=parseFloat(STHT1+STHT2+STHT3);
form.totalHT.value=(Somme=(parseFloat(parseFloat(totalHT))));
var TVP=parseFloat(totalHT*0.05);
form.TVP.value=(Somme=(parseFloat(parseFloat(TVP))));
var TVF=parseFloat(totalHT*0.10);
form.TVF.value=(Somme=(parseFloat(parseFloat(TVF))));
var transport=parseInt(Somme=(parseInt(form.transport.value)));
var douane=parseInt(Somme=(parseInt(form.douane.value)));
var total=parseFloat(totalHT+TVP+TVF+transport+douane);
form.total.value=(Somme=(parseFloat(parseFloat(total))));
' name="Submit" value="Calculer" /><input type="reset" value=" Réinitialiser la page"/></td>
<td class="center bg"><input type="text" class="right" name="total" size="10" readonly="readonly" /></td>
</tr>
<tr>
<td colspan="2" rowspan="2"><em>Les conditions de vente sont déterminées dans le contrat général de vente de l'entreprise. </em></td>
<td class="bordernone" colspan="3"> </td>
</tr>
<tr>
<td class="caps right bg" colspan="3">Vous êtes le patron © 2013</td>
</tr>
</table>
</form>
</body>
</html>