<?php
    session_start();
    include("../database/DBcontroller.php");
    if(isset($_SESSION["user_id"])){        
        ?>
            <script>
                location.replace("../index.php");
            </script>
        <?php
    }else{
        $getToken = $_GET['token'];
        $getId = $_GET['sp_code'];

        $frgt_sql = "SELECT * FROM `user_info` WHERE user_token='$getToken' AND user_id='$getId'";
        $frgt_query = mysqli_query($con, $frgt_sql);

        if(mysqli_num_rows($frgt_query) == 1){
            $user_row = mysqli_fetch_assoc($frgt_query);
            $user_id = $user_row['user_id'];
        }else{
            ?>
                <script>
                    location.replace("../index.php");
                </script>
            <?php
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset your password</title>

    <!-- including head links -->
    <?php
        include("_head-link.php");
    ?>
</head>
<body>


    <?php
        // including nav bar
        include($adRedirect."_partial-temp/_nav.php");
    
    ?>


    <main>
        
    <?php

        // if Submit form then UPDATE PASSWORDs
        if(isset($_POST['change_password'])){
            $errorMsg  = NULL;
            $password = $_POST['chng_password'];
            $confirmpass = $_POST['chng_confirmpass'];

            $password = filter_var($password,FILTER_SANITIZE_STRING);
            $confirmpass = filter_var($confirmpass,FILTER_SANITIZE_STRING);


            if(!$password){
                $errorMsg .= "<div class=' alert-danger border rounded p-1  mb-3'><strong>Insert password</strong></div>";
            }else{
                if(strlen($password)<5){
                    $errorMsg .= "<div class=' alert-danger border rounded p-1  mb-3'><strong>Password should contain minimum 5 character.</strong></div>";
                }else{
                    // matching two password
                    if($password != $confirmpass){
                        $errorMsg .= "<div class=' alert-danger border rounded p-1  mb-3'><strong>Password not matching</strong></div>";
                    }
                }
            }

            

            if(!$errorMsg){
                $password = md5($password);
                $password = mysqli_real_escape_string($con, $password);
                $chng_suc = null;

                $user_token = $user_id.bin2hex(random_bytes(16));

                $sql_update = "UPDATE `user_info` SET `password`='$password',`cnf_pass`='$confirmpass',`user_token`='$user_token' WHERE user_token='$getToken'";
                if(mysqli_query($con, $sql_update)){

                    $chng_suc = "<div class='alert alert-success rounded p-1 '><strong>Password changed sucessfull.</strong></div>";
                    
                }else{
                    $errorMsg .= "<div class=' alert-danger border rounded p-1  mb-3'><strong>Failed to Update your password</strong></div>";
                }

            }
        }



    ?>


    <section id="resetPassword">
        <div class="container-fluid jumbotron d-flex justify-content-center align-items-center w-100" style="height: 100vh;">
            <form action="" method="post" class=" col-lg-4 col-md-6 col-sm-10">
                <div class=" card w-100">
                    <div class=" card-header">
                        <h2 class="pl-4 py-3">Create your new password</h2>
                    </div>
                    <div class="card-body px-5">


                        <p class="mb-4">Create a new password that is at least 5 characters long. A strong password has a combination of letters, digits and punctuation marks.</p>
                            <!-- php messages -->
                        <?php echo @$errorMsg; 
                            if(isset($chng_suc)){
                                echo $chng_suc;
                            }
                        ?>

                        <!-- password -->
                        <div class="d-flex align-items-center justify-content-center form-group input-group w-100 mt-3">                            
                            <input type="password" class="form-input border m-0 password" name="chng_password" placeholder="New Password" style="width: 88%" required >
                            <i class=" fa fa-eye-slash border" onclick="showPass(0)" style=" padding: 9.5px; width: 12%"></i>
                        </div>

                        <!-- Confirm Password -->
                        <div class="d-flex align-items-center justify-content-center form-group input-group w-100">                            
                            <input type="password" class="form-input border m-0 password" name="chng_confirmpass" placeholder="Confirm password" style="width: 88%;" required >
                            <i class=" fa fa-eye-slash border" onclick="showPass(1)" style=" padding: 9.5px;width: 12%"></i>
                        </div>

                    </div>
                    <div class=" card-footer">                        
                        <input type="submit" name="change_password" class="btn btn-primary btn-lg w-100" style="font-size: 16px;" value="Reset Password">
                    </div>
                </div>
            </form>
        </div>
    </section>




    <script>
        function showPass(x){
            var pass =  document.querySelectorAll(".password");
            if(pass[x].type =="password"){
                pass[x].type = " text";
            }else{
                pass[x].type = "password" ;
            }
        }
    </script>


    </main>


    <!-- including footer -->
    <?php
        include($adRedirect."_partial-temp/_footer.php");
    ?>



</body>
</html>