<!-- REGISTRATION FORM -->
<?php
   


    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cnfpass = $_POST["cnfpass"];
    

    if(isset($_POST["reg_submit"])){
        $fname = filter_var($fname, FILTER_SANITIZE_STRING);
        $fname = ucwords($fname);
        $lname = filter_var($lname, FILTER_SANITIZE_STRING);
        $lname = ucwords($lname);
        $gender = filter_var($gender, FILTER_SANITIZE_STRING);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);
        $cnfpass = filter_var($cnfpass, FILTER_SANITIZE_STRING);
        $error = NULL;


        // name
        if(!$fname){
            $fnameErr = 'Insert First Name';
            $error = "error";
        }

        if(!$lname){
            $lnameErr = 'Insert Last Name';
            $error = "error";
        }

        // gender
        if(!$gender){
            $genderErr .= 'Insert your Gender';
            $error = "error";
        }else{
            if($gender !== "male" && $gender !== "female" && $gender !== "other"){
                $genderErr .= 'Invalid Gender';
                $error = "error";
            }
        }

        //email
        if(!$email){
            $emailErr .= 'Insert your Email';
            $error = "error";
        }else{
            // =======================================
            // Checking if there is already mail exist
            // =======================================

            $sql = "SELECT * FROM `user_info` WHERE email='$email'";
            $select_query = mysqli_query($con, $sql);

            if($row = mysqli_fetch_assoc($select_query)){
                // if found same email that mean it exist
                $emailErr .= 'Already have an account with this mail';
                $error = "error";
            }
        }


        // password 
        if(!$pass || !$cnfpass){
            $passErr .= 'Insert your Password';
            $error = "error";
        }else{
            if(strlen($pass)<5 || strlen($cnfpass)<5 ){
                $passErr .= 'password might be contain minimum 5 character';
                $error = "error";
            }else{
                if($pass !== $cnfpass){
                    $passErr .= 'Password is not matching';
                    $error = "error";
                }else{
                    $pass = md5($pass);
                }
            }
        }


        // Generating token
        $user_token =  bin2hex(random_bytes(16));


        if(!$error){
            // ----------------------------------
            // IF THERE IS NO ERROR THEN PUSH DATA TO DATABASE
            // ----------------------------------

            $sql_insert = "INSERT INTO `user_info`( `fname`, `lname`, `gender`, `email`, `password`, `cnf_pass`, `user_token`) VALUES ('$fname','$lname','$gender','$email','$pass','$cnfpass','$user_token')";

            if(mysqli_query($con, $sql_insert)){
                $successMsg = "<p class='alert alert-success'>Successfully created account. <a href='#' onclick='showModal()'> &nbsp; Login Now</a></p>";
            }else{
                $errorMsg .= "<h1>FAILED TO created account</h1>".mysqli_error($con);
            }

        }else{
            $errorMsg .= '<p class="alert alert-danger">Found an Error'.mysqli_error($con).'</p>';
        }



    } //ENDING OF SUBMIT BUTTON

?>


<!-- --------------------------------------- -->
<!-- ======================================= -->
<!-- --------------------------------------- -->

<section id="user-register">
    <div class="container">
    
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post" id="register">
            <h1>Create New <span class="text-red">TFC</span> Account</h1>

            <!-- showing success or error message  -->
            <?php
                echo $errorMsg ;
                echo $successMsg;
            ?>



            <!-- PERSONAL INFORMATION -->
            <p>Personal Information</p>
            <hr>

            <!-- first name -->
            <div class="input-group">
                <label for="fname">First Name <span class="text-red">*</span></label>
                <input type="text" id="fname" name="fname" value="<?php if($error){echo @$fname;}?>">

                <small class=" text-red"><?php if($error){echo @$fnameErr;}?></small>
            </div>

            <!-- Last name -->
            <div class="input-group">
                <label for="lname">Last Name <span class="text-red">*</span></label>
                <input type="text" id="lname" name="lname" value="<?php if($error){echo @$lname;}?>" >
                <small class=" text-red"><?php if($error){echo @$lnameErr;}?></small>
            </div>

            <!--  Gender -->
            <div class="input-group">
                <label>Gender : </label>
                <div>
                    <input type="radio" name="gender" id="g-male" value="male">
                    <label for="g-male">Male</label> | 
                    <input type="radio" name="gender" id="g-female" value="female">
                    <label for="g-female">Female</label> | 
                    <input type="radio" name="gender" id="g-other" value="other">
                    <label for="g-other">Other</label>  
                </div>
                <small class=" text-red"><?php if($error){echo @$genderErr;}?></small>
            </div>

            <!-- Sign In INFORMATION -->
            <p>Sign-in Information</p>
            <hr>

            <!-- email -->
            <div class="input-group">
                <label for="email">Email <span class="text-red">*</span></label>
                <input type="email" id="email" name="email" value="<?php if($error){echo @$email;}?>">
                <small class=" text-red"><?php if($error){echo @$emailErr;}?></small>
            </div>

            <!-- password -->
            <div class="input-group">
                <label for="pass">Password <span class="text-red">*</span></label>
                <input type="password" id="pass" name="pass">
            </div>

            <!-- Confirm password -->
            <div class="input-group">
                <label for="cpass">Confirm Password <span class="text-red">*</span></label>
                <input type="password" id="cpass" name="cnfpass">
                <small class=" text-red"><?php if($error){echo @$passErr;}?></small>
            </div>

            <input type="submit" name="reg_submit" value="Create An Account">

        </form>
    </div>
</section>


