<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author teo
 */
class product {
    var $id=null;
	var $name = null;
	var $image = null;
    var $price = null;
    var $sale = null;
	var $date_created = null;
	var $decs = null;
	var $special = null;
	var $view = null;
	var $stock = null;
	var $guarantee = null;
	var $id_category = null;
	var $brand = null;

    function __construct($id, $name, $image, $price, $sale, $decs,$special,$stock,$guarantee,$id_category,$brand) {
		$this->id=$id;
		$this->name = $name;
		$this->image = $image;
		$this->price = $price;
		$this->sale = $sale != null ? $sale : 0 ;
		$this->date_created = date("Y-m-d");
		$this->decs = $decs;
		$this->special = $special;
		$this->view = 0;
		$this->stock = $stock;
		$this->guarantee = $guarantee;
		$this->id_category = $id_category;
		$this->brand = $brand;
    }
    function getList(){
        $db = new connect();
        $query = "select * from product";
        $result = $db->getList($query);
        return $result;
    }
    // Lấy phần tử sản phẩm từ from tới to
    function getListPage($from,$to){
        $db = new connect();
        $select = "select * from product limit $from, $to";
        $result = $db->getList($select);
        return $result;
	}
	// Lấy sản phẩm bằng Id
    function getProductById($id) {
        $db = new connect();
        $query = "select * from product where id = $id";
        $result =  $db->getInstance($query);
        return $result;
    }
    function getProductByName($name) {
        $db = new connect();
		$query = "select * from product where name = '$name'";
        $result =  $db->getInstance($query);
        return $result;
    }
   function insert(){
       $db = new connect();
	   $query = "insert into product values(NULL,'$this->name','$this->image',$this->price,$this->sale,'$this->date_created',";
	   $query .= "'$this->decs',$this->special,$this->view,$this->stock, $this->guarantee,$this->id_category,$this->brand)";
	   $db->execute($query);
   }
   function update(){
	   $db = new connect();
	   $query = "update product set name = '$this->name', image = '$this->image',";
	   $query .= "price =  $this->price, sale = $this->sale,description ='$this->decs', special = $this->special,";
	   $query .= " stock = $this->stock, guarantee = $this->guarantee,id_category = $this->id_category,";
	   $query .= "id_brand = $this->brand where id =$this->id";
       $db->execute($query);
   }
   function delete(){
       $db = new connect();
       $query = "delete from product where id = ".$this->proid;
       $db->execute($query);
   }
   function deleteById($id){
       $db = new connect();
       $query = "delete from product where id = ".$id;
       $db->execute($query);
   }
   function deleteMulti($list){
       $db = new connect();
       $query = "delete from product where id IN (".implode(",",$list).")";
       $db->execute($query);
   }
   
}
