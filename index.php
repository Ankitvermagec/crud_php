<?php include_once './header.php'?>

  <section class="resgistration">
   <div class="container">
    <div class="row">
        <div class="col-lg-7 c1">
            <div class="img_a"></div>
            <div><p>Lorem ipsum dolor sit quod blanditiis eaque, pariatur amet.</p></div>
        </div>
        <div class="col-lg-5 c2">
            <div class="cc">Welcome back</div>

            <form action="./conn.php"  method="get">
                <div>
                    <p>Login your account</p>
                </div>
            <div>
                <input type="text" class="form-control" placeholder="Username" name="Username" id="">
            </div>
            <div>
                <input type="text" class="form-control" placeholder="Email" name="Password" id="">
            </div>
            <div><input type="submit" class="btn" name="Login" value="Login">
                <!-- <button class="btn">Login</button> -->
            </div>
            <div>
                <a href="./register.php"><p>Create Account</p></a>
                <p>Forgot Password?</p>
            </div>
            </form>
        </div>
    </div>
   </div>
  </section>

  <?php include_once './footer.php'?>