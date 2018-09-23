<?php
class order{
    public function __construct() {
        
    }
    public function createOrder($customerid){
        $db = new connect();
        $date = new DateTime("now");
        $dateCreate = $date->format("Y-m-d");
        $query = "insert into Order(OrderId, DateCreate,Total,CustomerId) values(NULL, '$dateCreate',0,$customerid)";
        //$query = "insert into Order values('NULL', '$dateCreate',0,$customerid)";
        $db->execute($query);
        $init = $db->getInstance("select orderid from mobile.Order order by orderid desc limit 1");
        return $init[0];
    }
    public function insertOrderDetail($proid,$orderid,$price,$quantity,$total){
        $db = new connect();
        $query = "insert into OrderDetail values('$proid','$orderid','$price','$quantity','$total')";
        $db->execute($query);      
    }
    public function updateOrderTotal($orderid,$total){
        $db = new connect();
        $query = "update Order set Total = '$total' where OrderId=$orderid";
        $db->execute($query);
    }
    function getOrder($orderid){
        $db = new connect();
        $select = "select orderid,datecreate,total,c.customerid,c.name from mobile.order o inner join customer c on o.customerid = c.customerid where orderid=$orderid";
        $result = $db->getInstance($select);
        return $result;
    }
    function  getOrderDetal($orderid){
        $db = new connect();
        $select = "select m.MobileId,Name,Quantity,od.Price,Total from orderdetail od inner join mobile m on od.mobileid = m.mobileid where orderid=$orderid";
        $result = $db->getList($select);
        return $result;
    }
}

?>

