<?php
class Comment {
    var $id= 0;
    var $time = null;
    var $content = null ;
    var $id_product= 0 ;
    var $id_guest = 0;
    var $rank = 0;
	
    function __construct($id,$content, $id_product, $id_guest) {
		$this->id = $id;
		$this->time = date("Y-m-d");
		$this->content = $content;
		$this->id_product = $id_product;
		$this->id_guest = $id_guest;
	}

	static function getComment($id_product){
		$db = new connect();
		$query = "select * from comment where id_product = $id_product ORDER BY id DESC" ;
		$result = $db->getList($query);
		return $result;
	}
	function insert(){
		$db = new connect();
		$query = "insert into comment values(NULL,'$this->time',";
		$query .= "'$this->content',$this->id_product,$this->id_guest,0)";
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
