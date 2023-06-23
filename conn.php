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
   
}elseif (isset($_GET['Login'])) {
  $name = $_GET['Username'];
  $pass = $_GET['Password'];

  $sql="SELECT * FROM `php_insert` WHERE `fullname`='$name' && `email`= '$pass' ";
   $result=mysqli_query($conn,$sql);
  
   $row=mysqli_fetch_all($result);
   var_dump($row);
}
 else {
    
    
}

?>