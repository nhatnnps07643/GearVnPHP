
<?php
if(isset($_GET['action']))
	$action=$_GET['action'];
elseif (isset ($_POST['action'])) 
	$action = $_POST['action'];
else
	$action="bill";

switch ($action) {
    case "bill":
       include "Admin/bill.php";
       echo "<script src='Admin/public/js/bill.js'> </script>";
	   break;
	   
	case "delete":
		deleteById('bill',$_GET['id']);
		header('Location: index.php?path=user&action=profile');
       break;
    case "getbill":   
        $listbill = Bill::Bill_Guest();
        $response = [
            'status' => 'true',
            'data' => Array(),
        ];
        foreach ($listbill as  $value) {
            array_push($response['data'], $value);
        }
        header('Content-type: application/json');
        echo json_encode( $response );
        break;
    case "updatebill":
        Bill::updateStatus($_GET['id']);
        echo $_GET['id'];
        break;
    case "getBillLimit":
        $page = $_GET['page'];
        $result = Bill::GetLimit($page*10 - 10 , $page*10);
        include 'Admin/partial/pageBill.php';
        break;
    case "getBillNotActive":
        $result = Bill::Bill_NotActive();
        include 'Admin/partial/pageBill.php';
        break;
	case "detailbill":
		$id  = $_GET['id'];
		$result = getBillDetail($id);
        include 'Admin/detailbill.php';
        break;


    
}
   
?>