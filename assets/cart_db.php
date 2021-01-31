<?php

@require_once("assets/baglanti.php");
session_start();
//ekleme
function addToCart($product_item){
    if(isset($_SESSION["shoppingCart"])){
        $shoppingCart=$_SESSION["shopppingCart"];
        $products=$shoppingCart["products"];

    }else {
        $products=array();
    }
//adet kontrolü
if(array_key_exists($product_item->id, $products)){
    $products[$product_item->id]->count++;
}else{
    $products[$product_item->id]=$product_item;
}

   //sepetin hesaplanması

   $toplam_fiyat=0.0;
   $total_count=0;

   foreach($products as $product){
    $product->toplam_fiyat=$product->count * $product->fiyat;
    $toplam_fiyat=$toplam_fiyat + $product->toplam_fiyat;
    $total_count += $product->count;
}
$summary["toplam_fiyat"]=$toplam_fiyat;
 $summary["total_count"]=$total_count;

   $_SESSION["shoppingCart"]["products"]=$products;
    $_SESSION["shoppingCart"]["summary"]=$summary;
    return $total_count;
} 
//çıkartma
function removeFromCart($product_id){
    if($_SESSION["shoppingCart"]){
        $shoppingCart=$_SESSION["shopppingCart"];
        $products=$shoppingCart["products"];

//ürünü listeden çıkar
if(array_key_exists($product_id, $products)){
    unset($products[$product_id]);
}
//tekrardan sepeti hesapla
$toplam_fiyat=0.0;
$total_count=0;

foreach($products as $product){
    $product->toplam_fiyat=$product->count * $product->fiyat;
    $toplam_fiyat=$toplam_fiyat + $product->toplam_fiyat;
    $total_count += $product->count;
}
$summary["toplam_fiyat"]=$toplam_fiyat;
 $summary["total_count"]=$total_count;

   $_SESSION["shoppingCart"]["products"]=$products;
    $_SESSION["shoppingCart"]["summary"]=$summary;
    return true;

    }

}
//arttırma
function incCount($product_id){
    if(isset($_SESSION["shoppingCart"])){
        $shoppingCart=$_SESSION["shopppingCart"];
        $products=$shoppingCart["products"];

  
if(array_key_exists($product_id, $products)){
    $products[$product_id]->count++;
}
$toplam_fiyat=0.0;
$total_count=0;

foreach($products as $product){
    $product->toplam_fiyat=$product->count * $product->fiyat;
    $toplam_fiyat=$toplam_fiyat + $product->toplam_fiyat;
    $total_count += $product->count;
}
$summary["toplam_fiyat"]=$toplam_fiyat;
 $summary["total_count"]=$total_count;

   $_SESSION["shoppingCart"]["products"]=$products;
    $_SESSION["shoppingCart"]["summary"]=$summary;
    return true;
} 
}
//azaltma
function decCount($product_id){
    if(isset($_SESSION["shoppingCart"])){
        $shoppingCart=$_SESSION["shopppingCart"];
        $products=$shoppingCart["products"];

  
if(array_key_exists($product_id, $products)){
    $products[$product_id]->count--;
}

$toplam_fiyat=0.0;
$total_count=0;

foreach($products as $product){
 $product->toplam_fiyat=$product->count * $product->fiyat;
 $toplam_fiyat=$toplam_fiyat + $product->toplam_fiyat;
 $total_count += $product->count;
}
$summary["toplam_fiyat"]=$toplam_fiyat;
 $summary["total_count"]=$total_count;

   $_SESSION["shoppingCart"]["products"]=$products;
    $_SESSION["shoppingCart"]["summary"]=$summary;
    return true;
} 

}

if(isset($_POST["p"])){
    $islem = $_POST["p"];
    if($islem == "addToCart"){
            $id=$_POST["product_id"];
    $product= $conn->query("SELECT * FROM urunler WHERE id={$id}", PDO::FETCH_ASSOC)->fetch();
      $product->count=1;
         echo addToCart($product);

    }else if($islem == "removeFromCart"){
        $id=$_POST["product_id"];
      echo removeFromCart($id);
    }
}

if(isset($_GET["p"])){
    $islem=$_GET["p"];
    if($islem== "incCount"){
            $id=$_GET["product_id"];
            if(incCount($id)){
                header("Location:../sepet.php");
            }

    }else if($islem == "decCount"){
        $id=$_GET["product_id"];
       if(decCount($id)){
           header("Location:../sepet.php");
       }
    }
}



?>