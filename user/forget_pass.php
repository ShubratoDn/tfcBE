<?php
    session_start();
    if(isset($_SESSION["user_id"])){        
        ?>
            <script>
                location.replace("../index.php");
            </script>
        <?php
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find your account</title>

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
        
    <!-- php codes starts -->
    <?php

        
        if(isset($_POST['recover'])){
            $rec_error = NULL;

            $rec_email = $_POST['rec_email'];
            $rec_email = filter_var($rec_email, FILTER_SANITIZE_EMAIL);

            $rec_sql = "SELECT * FROM user_info WHERE email = '$rec_email'";
            $rec_result = mysqli_query($con, $rec_sql);

            if($user_row = mysqli_fetch_assoc($rec_result)){
                
                // mail send information
                $userName =  $user_row['fname']." ".$user_row['lname'];
                $userToken = $user_row['user_token'];
                $user_id = $user_row['user_id'];


                $to = "$rec_email";
                $subject = "TFC Recover Password";
                $mailMsg ="<p>Hi $userName,</p>
                    <p><strong>Click here to  recover your account</strong></p>
                    http://localhost/tfc/user/reset_password.php?token=$userToken&&sp_code=$user_id";
                $header  = "From: TFC <tfc@gmail.com>"."\r\n" .
                            'Content-Type: text/html; charset=utf-8' ;

                if(mail($to, $subject, $mailMsg, $header)){
                    @$rec_suc .= "<div class=' alert-success border rounded px-1  mb-3'>Check<strong> $rec_email </strong> to recover your password</div>";
                }else{
                    $rec_error .= "<div class=' alert-danger border rounded px-1  mb-3'><strong>Failed to send recover mail</strong></div>";
                }

            }else{
                $rec_error .="<div class=' alert-danger border rounded p-2 text-dark mb-3'>
                                <p class='m-0'><strong>Unregistered email address!</strong></p>
                            </div>";
            }

        }
    
    ?>
    <!-- php codes Ends -->


    <section id="recover">
        <div class="container-fluid jumbotron d-flex justify-content-center align-items-center w-100" style="min-height: 80vh;">
            <form action="" method="post" class="col-lg-4 col-md-7 col-sm-10">
                <div class=" card w-100">
                    <div class=" card-header">
                        <h2>Find Your Account</h2>
                    </div>
                    <div class=" card-body">

                        <?php echo @$rec_error; if(isset($rec_suc)){echo $rec_suc;} ?>

                        <p class=" font-weight-bold">Please enter your email address  to find for your account.</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text " id="basic-addon1"><i class=" fa fa-user font-18"></i></span>
                            </div>
                            <input type="email" name="rec_email" class="form-control font-18" placeholder="enter your email ">
                        </div>
                    </div>
                    <div class=" card-footer">
                        <input type="submit" name="recover" class="btn btn-outline-primary w-100 font-18" value="Recover">
                    </div>
                </div>
            </form>
        </div>
    </section>


    </main>


    <!-- including footer -->
    <?php
        include($adRedirect."_partial-temp/_footer.php");
    ?>



</body>
</html>