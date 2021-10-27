<?php
  session_start();

  if(isset($_SESSION["admin_id"])){
    ?>
      <script>
        location.replace("index.php");
      </script>
    <?php
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- including headlink -->
    <?php
        include("_ad_partial/_admin-head.php");
    ?>

</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-center p-5">
                            <div class="brand-logo">
                                <img src="assets/images/logo.png" style=" width: 30%">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>


                            <!-- ================== -->
                            <!-- PHP CODE FOR SUBMIT -->
                            <!-- ================== -->
                            <?php

                              // LOGIN INFORMATION
                            @$email = $_POST["email"];
                            @$password = $_POST["password"];

                            if(isset($_POST["admin_submit"])){

                              $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                              $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                              $password = filter_var($password, FILTER_SANITIZE_STRING);

                              if(!$email){
                                // cheking for email insertation
                                $error .= "* Insert Email";
                              }else{
                                // if email is inserted
                                $sql = "SELECT * FROM `admin` WHERE admin_email = '$email'";
                                $result = mysqli_query($con, $sql);

                                  // chcking for this account has registered or not
                                  if($row = mysqli_fetch_assoc($result)){
                                    // if REGISTERED

                                    // checking for password correct or not
                                    $admin_id = $row["admin_id"];
                                    $admin_name = $row["admin_name"];
                                    $admin_post = $row["admin_post"];
                                    $admin_pass = $row["password"];
                                    $password = md5($password);
                                    if($admin_pass !== $password ){
                                      // notify for wrong password
                                      @$error .= "Incorrect password";
                                    }else{
                                      // if password is correct
                                       $_SESSION["admin_name"] = $admin_name;
                                       $_SESSION["admin_id"] = $admin_id;
                                       $_SESSION["admin_post"] = $admin_post;
                                      
                                      if(isset($_SESSION["admin_id"])){
                                        ?>
                                          <script>
                                            location.replace("index.php");
                                          </script>
                                        <?php
                                      }
                                    }

                                  }else{
                                    // showing message for this account is not registered
                                    @$error .= "You have not signed up yet";
                                  }
                              }

                            }//end of admin submit button
                              
                
                            ?>

                            <div class='alert alert-danger mx-3 font-12 font-weight-bold border-0 p-0'>
                                <?php echo @$error?>
                            </div>

                            <!-- admin Login Form -->
                            <form class="pt-3" action="<?php echo htmlentities($_SERVER["PHP_SELF"])?>" method="POST" >
                                <!-- Email -->
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $email?>" id="exampleInputEmail1" placeholder="Email">
                                </div>

                                <!-- password -->
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <!-- btton submit -->
                                <div class="mt-3">
                                    <input type="submit" name="admin_submit" value="SIGN IN"
                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->



    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
</body>

</html>