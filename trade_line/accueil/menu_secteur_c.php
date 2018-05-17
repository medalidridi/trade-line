<div class="container">
                        <div id="bgSliderBloc">
                        
                           <nav id="men" style="margin-top:-50px;">

                    
                           
     <?php
include("model/secteur.php");
$U=new secteur();
$res=$U->Affsecteur();
$id_client=$_GET['id_client'];
?>
<ul>
<li><a href="index.php" Style="padding: 8px;margin-left:0px !important; -webkit-border-radius: 10px 0 00px;border-radius: 10px 0 00px;"><span class="iconWrapper iconLink"><i style="margin-bottom:5px;" class="icon-home"  style="width:30px; height:auto; margin-top:10px; margin-right:5px;margin-top: -2px;"></i></span> ></a></li>

      <?php
  for($i=0;$i<count($res);$i++)
  {

  ?>
           <li> <b><i> <a href="vue_secteur_c.php?id=<?php echo $res[$i]['id'];?>&id_client=<?php echo $id_client?>" ><?php echo $res[$i]['nom']; ?></a> </i></b></li>
                              
<?php } ?>


</ul>
</nav>
                        
                        </div>
                    </div>
                </div>
               

<link href="ext.css" rel="stylesheet" type="text/css" />

            <!-- content -->
            <section id="content" class="portfolio postview">



