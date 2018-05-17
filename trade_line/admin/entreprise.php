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
  <h1>Espace Admin</h1>
</div>
  <div class="side">
   <?php include("menu.php");?>
  </div>
  <div class="main-content">
    <ol class="breadcrumb">
      <button type="button" class="btn btn-primary btn-xs " > <a href="vueentreprise.php" Style="color:white !important;" >Ajouter</a></button>
     
    </ol>
    <div class="row"></div>

    <div class="row"></div>
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
        <h3><i class="icon-table"></i>Entreprise</h3>
      </div>
      <div class="widget-content">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
          <tbody>
          </tbody>
          <thead>
            <tr>
              <th><div class="checkbox">
                <input type="checkbox">
              </div></th>
              <th>ID</th>
              <th>Nom</th>
              <th>Edition</th>
            </tr>
          </thead>
          <tbody>
            <?php
include("model/entreprise.php");
$U=new entreprise();
$res=$U->Affentreprise();

?>
            <?php
  for($i=0;$i<count($res);$i++)
  {
	  
  
  ?>
            <tr>
              <td><div class="checkbox">
                <input type="checkbox">
              </div></td>
              <td><?php echo $res[$i]['id']; ?></td>
              <td><?php echo $res[$i]['nom']; ?></td>
              <td class="text-right"><a href="modif_entreprise.php?id=<?php echo $res[$i]['id']; ?>"class="btn btn-default btn-xs">Modifier</a></a> <a href="control/supp_entreprise.php?id=<?php echo $res[$i]['id']; ?>"><img src="images/icon_suppression.png" width="30" height="30"></a></td>
            </tr>
            <?php } ?>
          </tbody>
          <tbody>
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src='c81813dd5f2238060c9ddecda9683907.js'></script>

<script src='d7dfc13379a397356e42ab8bd98901a0.js'></script>


</body>

</html>