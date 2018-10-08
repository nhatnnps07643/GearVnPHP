<?php
//Tao mang thong tin ve gio hang neu can
$table = 'guest';
if(!isset($_SESSION['cart']))
    $_SESSION['cart']=array();

if(isset($_GET['action']))
    $action=$_GET['action'];
elseif (isset ($_POST['action'])) 
    $action = $_POST['action'];
else
    $action="login";
switch ($action){
    case "login":
        include './view/login.php';
        break;

    case "registion":
        include './view/registion.php';
        break;

    case "logout":
        unset($_SESSION['user']);
        header('location: /GearVnPHP/index.php');
        break;

    case "profile":
        $Arrbill = Bill::GetById_guest($_SESSION['user']['id']);
        include './view/profile.php';    
        break;

    case "updateinfo":
        if(isset($_POST['name'])){
            
        }
        break;

    case "login_handle":
        $email = $_POST['email']; 
        $password  = $_POST['password'];
        $guestOld = Guest::issetGuest($email);
        if($guestOld != null){
            if(md5($password) == $guestOld['password']){
                $_SESSION['user'] = [
                    'id' => $guestOld['id'],
                    'email' => $guestOld['email'],
                    'name' => $guestOld['name'],
                    'image' => $guestOld['image'],
                    'address' => $guestOld['address'],
                    'number' => $guestOld['number'], 
                ];
                header('location: /GearVnPHP/index.php');
            }
        }
        $MESSAGE = 'Tài khoản hoặc mật khẩu không chính sát';
        include './view/login.php';
        break;  

    case "registion_handle":
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $image = './view/Public/img/user' .$_FILES['image']['name'];
            $password = $_POST['password'];
            $pass_re = $_POST['passwordre'];
            $number = $_POST['number'];
            $address = $_POST['address'];
            $guestOld = Guest::issetGuest($email);
            if($guestOld == null)
            {
                if($password == $pass_re){
                    $guest = new Guest(NULL,$name, $email,md5($password),NULL,$image,$address,$number);
                    $id = $guest->insert();
                    move_uploaded_file($_FILES['image']['tmp_name'] , $image );
                    $_SESSION['user'] = [
                        'id' => $ $id,
                        'email' => $email,
                        'name' => $name,
                        'image' => $image,
                        'address' => $address,
                        'number' => $number, 
                    ];
                    header('location: /GearVnPHP/index.php');
                }
                else{
                    $MESSAGE = 'Mật khẩu không trùng';
                }
               
            }
            else{
                $MESSAGE = 'Tài khoản đã tồn tại';
            }
        }
        include './view/registion.php';
        break;
	default: 
		require 'view/404.php';
		break;
}
?>

        