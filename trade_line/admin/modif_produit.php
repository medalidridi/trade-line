<?php include("session.php");?><!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  

  <link rel='stylesheet' href='b7fdc65bf39ca5aa7c146814f889de3a.css'>

  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300|Roboto:100,300,400,700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>

  <link href="assets/favicon.ico" rel="shortcut icon">
  <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>Responsive Admin template based on Bootstrap 3</title>

</head>

<body>

<div class="all-wrapper fixed-header left-menu">
  <div class="page-header">
  <div class="header-links hidden-xs">
    <div class="dropdown hidden-sm hidden-xs">
      <a href="#" data-toggle="dropdown" class="header-link"><i class="icon-cog"></i> Deconnecter</a>
    </div>

    <div class="dropdown">
      <a href="#" class="header-link clearfix" data-toggle="dropdown">
        <div class="avatar"></div>
        
      </a>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li><a href="#">Separated link</a></li>
        <li><a href="#">One more separated link</a></li>
      </ul>
    </div>
  </div>
  <a class="menu-toggler" href="#"><i class="icon-reorder"></i></a>
  <h1>Espace Modifier Produit</h1>
</div>
  <div class="side">
   <?php include("menu.php");?>
  </div>
  <div class="main-content">
    <ol class="breadcrumb">
      <li></li>
     
    </ol>
    <div class="row">
      <div class="col-md-6">
        <div class="widget widget-blue">
          <div class="widget-title">
            <div class="widget-controls">
  <div class="dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
    <a href="#" data-toggle="dropdown" class="widget-control widget-control-settings"><i class="icon-cog"></i></a>
    <ul class="dropdown-menu dropdown-menu-small" role="menu" aria-labelledby="dropdownMenu1">
      <li class="dropdown-header">Set Widget Color</li>
      <li><a data-widget-color="blue" class="set-widget-color" href="#">Blue</a></li>
      <li><a data-widget-color="red" class="set-widget-color" href="#">Red</a></li>
      <li><a data-widget-color="green" class="set-widget-color" href="#">Green</a></li>
      <li><a data-widget-color="orange" class="set-widget-color" href="#">Orange</a></li>
      <li><a data-widget-color="purple" class="set-widget-color" href="#">Purple</a></li>
    </ul>
  </div>
  <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refresh"><i class="icon-refresh"></i></a>
  <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="icon-minus-sign"></i></a>
  <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="icon-remove-sign"></i></a>
</div>
            <h3><i class="icon-ok-sign"></i> Modifier Produits</h3>
          </div>
          <div class="widget-content">
           <?php
$id=$_GET['id'];
include("model/produit.php");
$u=new produit();
$rest=$u->affproduitbyid($id);

?>
 <form action="control/contmodif.php?id=<?php echo $id; ?>" method="post">
<table width="200" border="1">
  <tr>
    <td>nom :</td>
    <td><input type="text" name="nom" id="nom" class="form-control" id="nom" value="<?php echo $rest['nom'];?>"/></td>
  </tr>
  <tr>
    <td>prix</td>
    <td><input type="text" name="prix" id="prix" class="form-control" id="nom" value="<?php echo $rest['prix'];?>" /></td>
  </tr>
  <tr>
    <td>categorie</td>
    <td><select name="categorie">
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
  </tr>
  <tr>
    <td>description</td>
    <td>
    <textarea name="description" id="description" cols="3" rows="5" class="form-control" ><?php echo $rest['description'];?></textarea></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="modifier" id="modifier" value="modifier" /></td>
  </tr>
</table>

</form>
          </div>
        </div>

        <div class="widget widget-red"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="widget widget-blue"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src='c81813dd5f2238060c9ddecda9683907.js'></script>

<script src='0ecdc2a1f21af0053c8e1d78bc57a41a.js'></script>


</body>

</html>