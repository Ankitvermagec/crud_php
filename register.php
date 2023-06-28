<?php include_once './header.php';
$conn = mysqli_connect('localhost','root','','CRUD_PHP');
if (isset($_GET['update'])) {
//    echo $_GET['update'];
   $id = $_GET['update'];

   $sql = "SELECT * FROM `php_insert` WHERE `id`='".$id."' ";

   $result=mysqli_query($conn,$sql);
  
   $row=mysqli_fetch_row($result);
//    var_dump($row);
  $_SESSION['row']=$row;
//   session_destroy();
}


?>

    <section class="register">
        <div class="container">
            <div class="row">
                <div class="col-lg  inner">
                    <div class="cc">
                        <?php 
                        if (isset($_GET['update'])) {
                          echo '<p>UPDATE</p>';
                            }else {
                                echo '<p>REGISTRATION</p>';
                            }
                        ?>
                        <!-- <p>REGISTRATION</p> -->
                        <p>Enter your personal data</p>                        
                    </div>
                    <div class="ca"></div>
                    <div class="ca cb"></div>
                    

                    <form action="./conn.php" method="get">
                        <div>
                            <input type="text" class="form-control" value="<?php 
                            if (isset($_GET['update'])) {
                                if (isset($_SESSION['row'])) {
                                    // var_dump($_SESSION['row']);
                                    echo $_SESSION['row'][1];
                                    
                                }
                                
                                  }
                            ?>" placeholder="Full name" name="fullname" id="">
                        </div>
    
                        <div>
                            <input type="email" class="form-control" value="<?php 
                            if (isset($_GET['update'])) {
                                if (isset($_SESSION['row'])) {
                                    // var_dump($_SESSION['row']);
                                    echo $_SESSION['row'][2];
                                    
                                }
                                
                                  } ?>" placeholder="email" name="email" id="">
                        </div>
    
                        <div>
                            <input type="text" class="form-control" 
                            value="<?php 
                            if (isset($_GET['update'])) {
                                if (isset($_SESSION['row'])) {
                                    // var_dump($_SESSION['row']);
                                    echo $_SESSION['row'][3];
                                    
                                }
                                
                                  } ?>"
                            placeholder="Address" name="address" id="">
                        </div>
                        
                        <div>
                            <input type="text" class="form-control" 
                            value="<?php 
                            if (isset($_GET['update'])) {
                                if (isset($_SESSION['row'])) {
                                    // var_dump($_SESSION['row']);
                                    echo $_SESSION['row'][4];
                                    
                                }
                                
                                  } ?>"
                            placeholder="phone" name="phone" id="">
                        </div>

                        <div>
                            <input type="checkbox" class="form-control-color" name="" id="checkbox">
                            <label for="checkbox">Lorem ipsum <span>dolor sit amit</span></label>
                            
                        </div>

                        <div>
                            <?php 
                            if (isset($_GET['update'])) {
                                echo '<input type="hidden" name="id" value="'.$_GET['update'].'">';
                                echo '<input  type="submit" name="up_date"
                                value="update" class="btn float-end w-50 m-2">';
                                
                                
                                  }else {
                                      echo '<input  type="submit" name="register"
                                      value="SUBMIT" class="btn float-end w-50 m-2">';
                                  }
                            ?>
                        
                            <!-- <button type="submit" name="register" class="btn float-end w-50 m-2">SUBMIT</button> -->
                        </div>
                    </form>

                    




                </div>
            </div>
            <div class="row">
                <div class="bottom">
                    <p>LOREM IPSUM SIT AMIT</p>
                </div>
            </div>
        </div>
    </section>


    

<?php include_once './footer.php'?>