    
    <?php

        if(isset($_POST['submit_fdb'])){
            @$fdb_rate = $_POST['fdb_rate'];
            $fdb_text = $_POST['user_fdb_text'];

            $fdb_rate = filter_var($fdb_rate, FILTER_SANITIZE_NUMBER_INT);
            $fdb_text = filter_var($fdb_text, FILTER_SANITIZE_STRING);

            $error = NULL;
            $fail_sub_msg= ' 
                            <div class="alert alert-danger alert-dismissible fade show mt-4">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Failed!</strong> Faild to submit your feedback
                            </div>';

            if($fdb_rate>5 || $fdb_rate<1 || !$fdb_rate){
                $error .= "error";
                echo $fail_sub_msg;
            }

            // IF YOU ARE LOGGED IN
            if(isset($_SESSION['user_id'])){

                $user_id = $_SESSION['user_id'];

                // CHECKING IF YOU ALREADY ADDED YOUR FEEDBACK
                $fdb_chk_sql = "SELECT * FROM `user_feedback` WHERE user_id='$user_id' AND item_id='$food_id'";
                $fdb_chk_result = mysqli_query($con, $fdb_chk_sql);

                if(mysqli_num_rows($fdb_chk_result)>0){
                    $error .= " ";
                    echo ' 
                    <div class="alert alert-danger alert-dismissible fade show mt-4">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Opps!</strong> Your have already send your feedback for this item.
                    </div>';
                }

                // =============== \\
                // IF ALL IS OKAY
                // =============== \\
                if(!isset($error)){
                    $fdb_sql = "INSERT INTO `user_feedback`(`user_id`, `item_id`, `feedback`, `rate`) VALUES ('$user_id', '$food_id','$fdb_text','$fdb_rate') ";

                    if(mysqli_query($con, $fdb_sql)){
                        echo ' 
                        <div class="alert alert-success alert-dismissible fade show mt-4">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Submitted!</strong> Thanks for your valuable FeedBack
                        </div>';


                        // ==================================
                        // IF SUCCESSFULLY SUBMITTED FEEDBACK
                        // ==================================
                        $find_item_fdb = "SELECT * FROM `user_feedback` WHERE item_id = '$food_id'"; 
                        $fdb_query = mysqli_query($con, $find_item_fdb); 
                        $fdb_count = 0;
                        $rate_count = 0;
                        while($fdb_row = mysqli_fetch_assoc($fdb_query)){
                            $fdb_count++;
                            $get_rate = $fdb_row['rate'];

                            // couting total rate
                            $rate_count = $rate_count + $get_rate;
                        }
                        $avg_rate =  round($rate_count / $fdb_count);
                        
                        $up_fdb_sql = "UPDATE `item_info` SET `item_rating`='$avg_rate',`item_t_review`='$fdb_count' WHERE item_id='$food_id'";

                        if(mysqli_query($con, $up_fdb_sql)){
                            // UPdated feedback
                        }



                    }else{
                        echo $fail_sub_msg;
                    } 

                }

            }else{ //IF NOT LOGGED IN

                $error .= " ";
                
                ?>
                <!-- if not logged in then show the login modal -->
                    <script>
                        var modal = document.querySelector(".modal-box");
                        modal.style.display = "flex";
                    </script>
                <?php
            }

           
        };
        
                        
    ?>


    <!-- WRITE YOUR FEED BACK -->
    <div class="write-fdb">
        <a href="#wrt_fdb" data-toggle="collapse" class="wrt_fdb_btn">Write a Review for this item</a>
        <div id="wrt_fdb" class="collapse">
            <form action="" method="POST">  
                <!-- feedback text -->
                <textarea name="user_fdb_text" class="fdb_text" placeholder="Please write your honest opinion and give a rating"><?php  if(isset($error)){echo $fdb_text;} ?></textarea>
                <hr>

                <div class=" d-flex justify-content-between align-items-center">
                    <div class="rating">
                        <label>
                            <input type="radio" name="fdb_rate" value="1" required/>
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="fdb_rate" value="2"/>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="fdb_rate" value="3" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>   
                        </label>
                        <label>
                            <input type="radio" name="fdb_rate" value="4" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="fdb_rate" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                    </div>
                    
                    <!-- Submit feedback button -->
                    <input style="padding: 1rem 3rem; font-size:1.6rem;" class="btn btn-outline-primary" type="submit" value="Submit" name="submit_fdb">
                </div>
            </form>
        </div>
    </div>