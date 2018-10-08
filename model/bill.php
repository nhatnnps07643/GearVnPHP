<?php
class Bill{
	var $id = null;
	var $total = 0;
	var $address = null;
	var $phone = null;
	var $date_created = null;
	var $status = 0;
	var $payments = null;
	var $noted = null;
	var $id_guest = null; 

    public function __construct($total, $address, $phone, $payments , $noted, $id_guest) {
		$this->total = $total;
        $this->address = $address;
        $this->phone = $phone;
        $this->date_created = date("Y-m-d");
        $this->status = 0;
        $this->payments = $payments;
        $this->noted = $noted;
        $this->id_guest = $id_guest;
    }
    public function insert(){
		$db = new connect();
		$query = "insert into bill values(NULL,'$this->total','$this->address','$this->phone',";
		$query .= "'$this->date_created', $this->status, '$this->payments', '$this->noted', $this->id_guest)";
		$result = $db->execute($query);
		$id = $db->getInstance("SELECT LAST_INSERT_ID()");
		return $id[0];
	}
	
	static public function GetById_guest($id_guests){
		$db = new connect();
		$query = "select * from bill where id_guest = $id_guests";
		$result = $db->getList($query);
		return $result;
	}

    static function updateStatus($id){
		$db = new connect();
		$query = "update bill set status = 1 where id = $id ";
		$result = $db->execute($query);
		return $result;
    }
}

?>

