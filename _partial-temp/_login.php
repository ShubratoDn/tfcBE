<?php
    // error_reporting(E_ERROR | E_PARSE | E_NOTICE);

    // LOGIN INFORMATION
    @$email = $_POST["email"];
    @$password = $_POST["password"];

    if(isset($_POST["submit"])){
        
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $password = filter_var($password, FILTER_SANITIZE_STRING);

        if(!$email){
            // cheking for email insertation
            $error .= "* Insert Email";
        }else{
            // if email is inserted
            $sql = "SELECT * FROM `user_info` WHERE email = '$email'";
            $result = mysqli_query($con, $sql);

            // chcking for this account has registered or not
            if($row = mysqli_fetch_assoc($result)){
                // if REGISTERED

                // checking for password correct or not
                $user_id = $row["user_id"];
                $fname = $row["fname"];
                $user_pass = $row["password"];
                $password = md5($password);
                if($user_pass !== $password ){
                    // notify for wrong password
                    @$error .= "Incorrect password";
                }else{
                    // if password is correct
                    if(!isset($_SESSION['user_id'])){
                        ?>                        
                            <script>
                                location.reload();
                            </script>
                        <?php
                    }

                    $_SESSION["fname"] = $fname;
                    $_SESSION["user_id"] = $user_id;

                }

            }else{
                // showing message for this account is not registered
                $error .= "You have not signed up yet";
            }
        }


    }
    
?> 

<!--LOGIN modal box -->    
<div class="modal-box">
    <!-- LOGIN FORM -->
    <div class="login">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" class="login-form" method="POST">
            <h2 class=" text-center login-title">Login</h2>

            <div class='alert alert-danger mx-3 font-12 font-weight-bold border-0 p-0'>
                <?php echo @$error?>
            </div>

            <!-- name -->
            <input type="text" placeholder="Phone or Email" name="email">
            <!-- email -->
            <input type="password" placeholder="Password" name="password">
            <div style="display: flex; margin: 1rem" class=" align-items-center">
                <!-- remeber me checkbox -->
                <input style="width: fit-content; margin: 0 .3rem;" type="checkbox" name="remember" id="remember-me">
                <label for="remember-me" style="margin:0;"><small>Remember me</small></label>
            </div>
            <!-- submit buutton -->
            <input type="submit" name="submit" value="Login" class=" login-submit">

            <p class=" text-muted">Don't have an account? <a href="user/register.php" class="text-red">Sign up</a></p> 
            <p><a href="#" class=" text-red">Forgot Password</a></p>
        </form>
    </div>
</div>
<!-- modal box end -->