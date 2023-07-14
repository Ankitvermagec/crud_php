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
        color: azure;
    }
</style>

<style>
    .back_video video{
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: -1;
        /* background-repeat: no-repeat; */
        position: fixed;

        width: 100vw;
        height: 100vh;
        object-fit: cover;
    }
    
    @media (min-aspect-ratio: 16/9) {
        /* .back_video  video{
            width: 100%;
            height: auto;
        } */
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
 
    <div class="back_video">
        <video  autoplay loop muted plays-inline >
        <source sizes="" src="./assets/img/Animated.webm" srcset="" type="video/mp4">
    </video>
    <?php 

    while ($row=mysqli_fetch_row($result)) {
        echo '
        

        <div class="row cc mt-5">
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
    </div>
    
    ';
    }
    
    ?>


</div>   
    </div>
</section>
<?php include_once './footer.php'?>