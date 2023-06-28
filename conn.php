<?php 

// $conn = mysqli_connect('localhost','root','');
// $sql = "CREATE DATABASE CRUD_PHP";
// mysqli_query($conn,$sql);
// echo 'hello php0';

$conn = mysqli_connect('localhost','root','','CRUD_PHP');
$sql = "CREATE TABLE `crud_php`.`php_insert` (`id` INT NOT NULL AUTO_INCREMENT , `fullname` VARCHAR(50) NOT NULL , `email` VARCHAR(100) NOT NULL , `address` VARCHAR(100) NOT NULL , `phone` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
mysqli_query($conn,$sql);

// $sql = "INSERT INTO `php_insert` (`id`, `fullname`, `email`, `address`, `phone`) VALUES (NULL, 'sun verma', 'rebeifjir@gmail.com', 'hbfurhg', '546383838');";
// mysqli_query($conn,$sql);

if (isset($_GET['register'])) {
   $name=  $_GET['fullname'];
   $email=  $_GET['email'];
   $address=  $_REQUEST['address'];
   $phone=  $_GET['phone'];
  
   $sql = "INSERT INTO `php_insert` (`fullname`, `email`, `address`, `phone`) VALUES ( '$name', '".$email."', '".$address."', '".$phone."');";
   $result=mysqli_query($conn,$sql);
//    $sql="SELECT * FROM `php_insert`";
//    $result=mysqli_query($conn,$sql);
  
//    $row=mysqli_fetch_all($result);
// //    print_r($row);
//    var_dump($row);
//    while ($row) {
//     // echo $row;
//     // mysqli_fetch_all($result);
//    }



   header("location:index");
   
}elseif (isset($_GET['delete'])) {
   $sql = "DELETE FROM `php_insert` WHERE `php_insert`.`id` = ".$_GET['delete']."";
   $result=mysqli_query($conn,$sql);
  header('location:temp');


}elseif (isset($_GET['up_date'])) {
   // echo $_GET['update'];
   $u_id = $_GET['id'];
   $u_name=  $_GET['fullname'];
   $u_email=  $_GET['email'];
   $u_address=  $_REQUEST['address'];
   $u_phone=  $_GET['phone'];

   $sql = "UPDATE `php_insert` SET `fullname`='".$u_name."',`email`='".$u_email."',`address`='".$u_address."',`phone`='".$u_phone."' WHERE `id` ='".$u_id."' ";
   $result=mysqli_query($conn,$sql);
   header('location:temp');
}
elseif (isset($_GET['Login'])) {
  $name = $_GET['Username'];
  $pass = $_GET['Password'];

  if ($name&&$pass) {
   $sql="SELECT * FROM `php_insert` WHERE `fullname`='".$name."' && `email`= '".$pass."' ";
   $result=mysqli_query($conn,$sql);
  
   // $row=mysqli_fetch_all($result);
   // var_dump($row);
       if ($row=mysqli_fetch_row($result)) {
           header('location:temp');
        }else {
         header('location:index');
        }
   
  } else {
   header('location:index');
  }
  
 
}
 else {
    
    
}

?>