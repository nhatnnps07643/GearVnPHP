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
	var $tagseo = null;
	var $image = null;
    var $price = null;
    var $sale = null;
	var $date_created = null;
	var $decs = null;
	var $special = null;
	var $view = null;
	var $purchases = null;
	var $stock = null;
	var $guarantee = null;
	var $id_category = null;
	var $brand = null;

    function __construct($id, $name,$tagseo, $image, $price, $sale, $decs,$special,$stock,$guarantee,$id_category,$brand) {
		$this->id=$id;
		$this->name = $name;
		$this->tagseo = $tagseo;
		$this->image = $image;
		$this->price = $price;
		$this->sale = $sale != null ? $sale : 0 ;
		$this->date_created = date("Y-m-d");
		$this->decs = $decs;
		$this->special = $special;
		$this->view = 0;
		$this->stock = $stock;
		$this->purchases = 0;
		$this->guarantee = $guarantee;
		$this->id_category = $id_category;
		$this->brand = $brand;
    }
    // Lấy phần tử sản phẩm từ from tới to
    function getListPage($from,$to){
        $db = new connect();
        $select = "select * from product order by id DESC limit $from, $to ";
        $result = $db->getList($select);
        return $result;
	}

    function getCount(){
        $db = new connect();
        $select = "select COUNT(id) from product";
        $result = $db->getInstance($select);
        return $result;
	}

    static function getProductSpecial($top){
        $db = new connect();
        $query = "select * from product where special = 1 ORDER BY id DESC limit $top";
		$result = $db->getList($query);
        return $result;
	}

    static function getProductCate($id){
        $db = new connect();
        $query = "select * from product where id_category = $id";
		$result = $db->getList($query);
        return $result;
	}

    static function getProductNew($top){
        $db = new connect();
        $query = "select * from product order by id DESC limit $top";
		$result = $db->getList($query);
        return $result;
	}

    static function getProductPurchases($top){
        $db = new connect();
		$query = "select * from product ORDER BY purchases DESC limit $top";
		$result = $db->getList($query);
        return $result;
	}

    function insert(){
        $db = new connect();
        $query = "insert into product values(NULL,'$this->name','$this->tagseo','$this->image',$this->price,$this->sale,'$this->date_created',";
		$query .= "'$this->decs',$this->special,$this->view,$this->purchases,$this->stock, $this->guarantee,$this->id_category,$this->brand)";
        $db->execute($query);
	}
	
    static function updatePurchases($id ,$purchases){
        $db = new connect();
		$query = "update product set purchases = $purchases where id = $id ";
        $db->execute($query);
	}
	
    function update(){
        $db = new connect();
        $query = "update product set name = '$this->name',tagseo = '$this->tagseo', image = '$this->image',";
        $query .= "price =  $this->price, sale = $this->sale,description ='$this->decs', special = $this->special,";
        $query .= " stock = $this->stock, guarantee = $this->guarantee,id_category = $this->id_category,";
		$query .= "id_brand = $this->brand where id =$this->id";
        $db->execute($query);
    }
    static public function searchProduct($name){
        $db = new connect();
        $query = "SELECT * FROM product WHERE name LIKE '%$name%' OR tagseo LIKE '%$name%'";
		$result = $db->getList($query);
		return $result;
    }
}
