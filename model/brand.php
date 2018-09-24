<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of brands
 *
 * @author teo
 */
class Brands {
    var $id = null;
	var $name = null;
	var $image = null;
    function __construct($id,$name, $image) {
		$this->id = $id;
		$this->name = $name;
		$this->image = $image;
	}

	//Lấy danh sách danh thương hiệu
    function getList(){
        $db = new connect();
        $query = "select * from brands";
        $result = $db->getList($query);
        return $result;
	}
	// Lấy thương hiệu bằng ID
    function getBrandsById($id) {
        $db = new connect();
        $query = "select * from brands where id = $id";
        $result =  $db->getInstance($query);
        return $result;
	}
	// Tìm kiếm chính sát
    function searchBrandsByName($name) {
        $db = new connect();
		$query = "select * from brands where name = '$name'";
        $result =  $db->getInstance($query);
        return $result;
	}
	// Tìm kiếm tương đối
    function searchByName($name) {
        $db = new connect();
		$query = "select * from brands where name like '%$name%'";
        $result =  $db->getList($query);
        return $result;
	}
	// Thêm một danh mục
	function insert(){
		$db = new connect();
		$query = "insert into brands values(NULL,'".$this->name."','";
		$query .= $this->image."')";
		$db->execute($query);
	}
	// Cập nhật một danh mục
	function update(){
		$db = new connect();
		$query = "update brands set name = '".$this->name."',image='";
		$query .= $this->image;
		$query .= "'where id= ".$this->id;
		$db->execute($query);
	}
	// Xóa danh mục
	function deleteById($id){
		$db = new connect();
		$query = "delete from brands where id = ".$id;
		$db->execute($query);
	}
	// Xóa nhiều danh mục
	function deleteMulti($list){
		$db = new connect();
		$str = implode(',',$list);
		$query = "delete from brands where id IN (".$str.")";
		$db->execute($query);
	}
}
