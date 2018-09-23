<?php
function add_item($key,$quantity){
    $pros = new product();
    $pro = $pros->getProductById($key);
    //Neu san pham da co trong gio hang, cap nhat so luong
    if(isset($_SESSION['cart'][$key])){
        $quantity += $_SESSION['cart'][$key]['qty'];
        update_item($key,$quantity);
        return;
    }
    
    $cost = $pro['Price'];
    $total = $cost * $quantity;
    $item = array(
        'name'=> $pro['Name'],
        'cost'=> $cost,
        'qty'=> $quantity,
        'total'=> $total
    );
    $_SESSION['cart'][$key]=$item;   
}
// cap nhat san pham cung gio hang
function update_item($key, $quantity){
    $quantity = (int)$quantity;
    if($quantity<=0){
        unset($_SESSION['cart'][$key]);
    }else{
        $_SESSION['cart'][$key]['qty']=$quantity;
        $total = $_SESSION['cart'][$key]['cost']*$_SESSION['cart'][$key]['qty'];
        $_SESSION['cart'][$key]['total']=$total;
    }
}
//lay tong doanh thu cua gio hang
function get_subtotal(){
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $item){
        $subtotal += $item['total'];
    }
    $subtotal = number_format($subtotal,2);
    return $subtotal;
}

?>