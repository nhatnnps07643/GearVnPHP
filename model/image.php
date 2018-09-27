<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of image
 *
 * @author Nhat
 */
class Image {
    var $id= 0;
	var $id_product = null;
	var $link = null;
    function __construct($id,$id_product, $link) {
		$this->id = $id;
		$this->id_product = $id_product;
		$this->link = $link;
	}
	//Lấy danh sách được hiển thị
    function ImgAndProduct(){
        $db = new connect();
		$query = "select image.id as id , id_product as id_p, name, image.link as link from image , product where image.id_product = product.id";
        $result = $db->getList($query);
        return $result;
	}
	// search by name
	
	// Thêm một danh mục
	function insert(){
		$db = new connect();
		$query = "insert into image values(NULL,";
		$query .= "$this->id_product,'$this->link')";
		$db->execute($query);
	}
	// Cập nhật một danh mục
	function update(){
		$db = new connect();
		$query = "update image set link = '$this->link',";
		$query .= "id_product = '$this->id_product";
		$query .= "' where id=".$this->id;
		$db->execute($query);
	}
}
?>
