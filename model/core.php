
<?php 
    // hàm tìm kiếm tương đối tên
    function searchByName($table,$name) {
        $db = new connect();
		$query = "select * from $table where name like '%$name%'";
        $result =  $db->getList($query);
        return $result;
    }
    // Tìm kím chính sát
    function getByName($table, $name) {
        $db = new connect();
        $query = "select * from $table where name = '$name'";
        $result =  $db->getInstance($query);
        return $result;
    }
    //Lấy danh sách danh mục
    function getList($table){
        $db = new connect();
        $query = "select * from $table ORDER BY ID DESC";
        $result = $db->getList($query);
        return $result;
    }

    function getListMulti($table,$select,$list_id){
        $db = new connect();
        $str = implode(',', $list_id);
        $query = "select * from $table where $select IN ( $str )";
        $result = $db->getList($query);
        return $result;
    }
        

    // Lấy cái gì đó từ ID 
    function getById($table, $id) {
        $db = new connect();
        $query = "select * from $table where id = $id";
        $result =  $db->getInstance($query);
        return $result;
    }
    // Xóa danh mục
    function deleteById($table,$id){
        $db = new connect();
		$query = "delete from $table where id = ".$id;
        $db->execute($query);
    }
    // Xóa nhiều danh mục
    function deleteMulti($table,$list){
        $db = new connect();
        $str = implode(',',$list);
        $query = "delete from $table where id IN (".$str.")";
        $db->execute($query);
    }
   
?>