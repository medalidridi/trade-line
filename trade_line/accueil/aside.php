<aside class="PortfolioStickyMenu" id="sidebar" style="margin-left: -185px; ">
                               
                                    <nav id="subnav">
                                     
                                      <ul id="nav" >
	
		
        <li><a href="#" align="center"><b><i>Categorie</i></b></a></li>
        



    
      
       <?php
	   include("model/sous_categorie.php"); $id_sect=$_GET['id'];
  for($i=0;$i<count($res);$i++)
         {
		


			  
  ?>
 
  <li><a href="vue_categorie.php?id1=<?php echo $res[$i]['id'];?>&id=<?php echo $id_sect;?>" ><?php echo $res[$i]['nom']; ?></a>
                
			         
                <ul>
                
 <?php
 $v=new sousCategorie();
$ress=$v->affSousCategoriebycateg($res[$i]['id']);

  for($j=0;$j<count($ress);$j++) { 
 


 
 ?>

 <li><a href="vue_sous_categorie.php?id1=<?php echo $res[$i]['id'];?>&id=<?php echo $id_sect;?>&amp;id2=<?php echo $ress[$j]['id'];?>" ><?php echo $ress[$j]['nom']; ?></a></li>
 
 <?php } ?>
            
				</ul></li>
    
    <?php } ?>
    
    
    
			</ul>
	 
                                    </nav>
                                   </nav>
                                </aside>