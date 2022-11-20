<?php 
class panier{
    private $dbco;
    public function __construct($dbco){
         if(!isset($_SESSION)){
            session_start();
         }
         if(!isset($_SESSION['panier'])){
            $_SESSION['panier']=array();
         }
         $this->dbco= $dbco;
         if(isset($_GET['delPanier'])){
            $this->del($_GET['delPanier']);
         }
         if(isset($_POST['panier']['quantity'])){
            $this->recalc();
         }
    }

    public function recalc(){
        foreach($_SESSION['panier'] as $product_id =>$quantity){
            if(isset($_POST['panier']['quantity'][$product_id])){
                $_SESSION['panier'][$product_id]=$_POST['panier']['quantity'][$product_id];
            }
        }
    }
    
    public function count(){
        return array_sum($_SESSION['panier']);
    }


    public function total(){
        $total= 0;
        $ids= array_keys($_SESSION['panier']);
        if(empty($ids)){
            $products=array();
        }else{
        $req= $this->dbco->prepare('SELECT id, prix FROM PRODUIT WHERE id IN ('.implode(',',$ids).')');
        $req->execute(array());
        $products= $req->fetchAll(PDO::FETCH_OBJ);
        }  
        foreach($products as $product){
            $total += $product->prix * $_SESSION['panier'][$product->id] ;
        }
        return $total;  
    }


    public function add($product_id){
        if(isset($_SESSION['panier'][$product_id])){
            $_SESSION['panier'][$product_id]++;
        }else{
            $_SESSION['panier'][$product_id]=1;
        }
        
    }

    public function del($product_id){
        unset($_SESSION['panier'][$product_id]);
           
    }

    
}