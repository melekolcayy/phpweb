
<?php

//fetch_cart.php

session_start();

$total_price = 0;
$total_item = 0;

$output = '
<div class="table-responsive" id="order_table">
 <table class="table table-bordered table-striped">
  <tr>  
            <th width="40%">Ürün Adı</th>  
            <th width="10%">Miktar</th>  
            <th width="20%">Fiyat</th>  
            <th width="15%">Toplam</th>  
            <th width="5%">Durum</th>  
        </tr>
';

if(!empty($_SESSION["shopping_cart"]))
{
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
  $output .= '
  <tr>
   <td>'.$values["product_name"].'</td>
   <td>'.$values["product_quantity"].'</td>
   <td align="right"> '.$values["product_price"].' ₺</td>
   <td align="right"> '.number_format($values["product_quantity"] * $values["product_price"], 2).' ₺</td>
   <td><button name="delete" class="btn btn-danger btn-xs delete" id="'. $values["product_id"].'">Kaldır</button></td>
  </tr>
  ';
  $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);

  $total_item = $total_item + 1;
 }
 $output .= '
 <tr>  
        <td colspan="3" align="right">Toplam</td>  
        <td align="right"> '.number_format($total_price, 2).' ₺</td>  
        <td></td>  
    </tr>
 ';
}
else
{
 $output .= '
    <tr>
     <td colspan="5" align="center">
     Sepetiniz boş!
     </td>
    </tr>
    ';
}
$output .= '</table></div>';

$data = array(
 'cart_details'  => $output,
 'total_price'  => '₺' . number_format($total_price, 2),
 'total_item'  => $total_item
);

echo json_encode($data);

?>
