<?php
class BillDetail{
	var $id = null;
	var $id_product = 0;
	var $count = null;
	var $id_bill = null;

    public function __construct($id_product, $count, $id_bill) {
        $this->id_product = $id_product;
        $this->count = $count;
        $this->id_bill = $id_bill;
    }
    public function insert(){
		$db = new connect();
		$query = "insert into bill_detail values(NULL,$this->id_product, $this->count,$this->id_bill)";
		$result = $db->execute($query);
		return $result;
	}
}

?>

