<?php include_once './header.php'?>

<style>
    .fetch_all .cc{
        box-shadow: 0px 2px 4px gray;
        /* height: 50px; */
        width: 70%;
        border-radius: 0 50px 0 50px;
        padding: 20px;
        font-family: sans-serif;
        font-size: 20px;
        margin: auto;
       
    }
</style>

<?php

$conn = mysqli_connect('localhost','root','','CRUD_PHP');

$sql="SELECT * FROM `php_insert` ";
$result=mysqli_query($conn,$sql);


// while ($row=mysqli_fetch_row($result)) {
//     // echo $row;
//     // print_r($row);
//     var_dump($row[1]);

//     var_dump($row[2]);
// }

?>



<section  class="fetch_all">
    <div class="container">

    <?php 

    while ($row=mysqli_fetch_row($result)) {
        echo '<div class="row cc mt-5">
        <div class="col">
          <div>Name:'.$row[1].'</div>
          <div>Email:'.$row[2].'</div>
          <div>Address:'.$row[3].'</div>
        </div>
        <div class="col">
        <a href="./register.php?update='.$row[0].'" class="text-decoration-none"> <div  class=" btn btn-success text-bg-dark mt-5">UPDATE</div>
          </a>
          <a href="./conn.php?delete='.$row[0].'" class="text-decoration-none"><div class="btn btn-danger mt-5">DELETE</div>
          </a>

          
        </div>
    </div>';
    }
    
    ?>


        
    </div>
</section>
<?php include_once './footer.php'?>