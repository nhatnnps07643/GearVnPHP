<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of category
 *
 * @author teo
 */
class Category {
    var $id= 0;
	var $name = null;
	var $show = 0;
	var $img = null;
    function __construct($id,$name, $show, $img) {
		$this->id = $id;
		$this->name = $name;
		$this->show = $show;
		$this->img = $img;
	}
	//Lấy danh sách được hiển thị
    function getListShow(){
        $db = new connect();
        $query = "select * from category where show = 1";
        $result = $db->getList($query);
        return $result;
    }
	// Lấy sản phẩm bằng Id
    function countCateSelect() {
        $db = new connect();
		$query = "select count(id) from category where category.show = 1";
        $result =  $db->getInstance($query);
        return $result;
	}
	// Thêm một danh mục
	function insert(){
		$db = new connect();
		$query = "insert into category values('".$this->name."',NULL,";
		$query .= $this->show.",'".$this->img."')";
		$db->execute($query);
	}
	// Cập nhật một danh mục
	function update(){
		$db = new connect();
		$query = "update category set name = '".$this->name."', category.show=";
		$query .= $this->show.", img='".$this->img;
		$query .= "' where id=".$this->id;
		$db->execute($query);
	}
}
?>
