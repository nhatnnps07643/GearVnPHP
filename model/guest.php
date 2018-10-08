<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of guest
 *
 * @author teo
 */
class Guest {
    var $id = null;
	var $name = null;
	var $email = null;
	var $password = null;
	var $id_facebook = null;
	var $image = null;
	var $address = null;
	var $number = null;
	var $active = null;
    function __construct($id,$name, $email,$password,$id_facebook,$image,$address,$number) {
		$this->id = $id;
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
		$this->id_facebook = $id_facebook;
		$this->address = $address;
		$this->image = $image;
		$this->number = $number;
		$this->active = 1;
	}
	
	// Thêm một danh mục
	function insert(){
		$db = new connect();
		$query = "insert into guest values(NULL,'$this->name','$this->email',";
		$query .= "'$this->password',NULL,' $this->image', '$this->address','$this->number',1 )";
		$db->execute($query);
		$id = $db->getInstance("SELECT LAST_INSERT_ID()");
		return $id;
	}
	
	function issetGuest($email){
		$db = new connect();
		$query = "select * from guest where email = '$email'";
		$result = $db->getInstance($query);
		return $result;
	}

	function getByEmail($email){
		$db = new connect();
		$query = "select * from guest where email = $email";
		$result = $db->getList($query);
		return $result;
	}
	// Cập nhật một danh mục
	function update(){
		$db = new connect();
		$query = "update guest set name = '".$this->name."',email='$this->email',";
		$query .= "password = '$this->password', image = '$this->image', address = '$this->address',";
		$query .= "number = '$this->number', active = '$this->active'";
		$query .= "'where id= ".$this->id;
		$db->execute($query);
	}

	static function updateinfo($id){
		$db = new connect();
		$query = "update guest set name =";
		$db->execute($query);
	}

	function reset($id){
        $db = new connect();
        $query = "update guest set password='123456789' where id = $id";
        $db->execute($query);
    }
	// Xóa danh mục
}
