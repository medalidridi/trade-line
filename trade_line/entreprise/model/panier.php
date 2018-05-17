<?php 

 class panier {
	 
	 private $DB;
	 public $total=0;
	 private $idsession;
	 public function __construct($DB) {
		 
	if(!isset($_SESSION)){
		session_start();
		
		}	 
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier']=array();
			
			}
			$this->DB =$DB;
			
			if(isset($_GET['delPanier']))
			{
				$this->del($_GET['delPanier']);
			}
		 }
		 
		 
		 
		 public function counte(){
			 return array_sum($_SESSION['panier']);
		 }
		 
		 
		 
		public function total(){
		

  include("model/produit.php");
			$Ut=new produit();
			 

foreach($_SESSION['panier']['id'] as $k=>$v) {
  
  

$resst=$Ut->affproduitbyid($v);

                 
			
			$total += $resst->prix;
			
			}
			
		return $total;
			 
		}
		
		public function add($product_id){
			
			$_SESSION['panier'][$product_id]++;
			
		}
			
			
			
			public function del($product_id){
				unset($_SESSION['panier'][$product_id]);
			}

	}
	
	
		 
		 
