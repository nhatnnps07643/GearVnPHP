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
}
