        <!-- CATAGORIES section starts  -->
        <section id="catagories">
            <div class="container-fluid">
                <div class="all-catagories">
                    <!-- Title -->
                    <div class="title my-0 mx-auto">
                       Our <span class="t-hl">Catagories</span>
                    </div>

                    <div class="owl-carousel owl-theme my-5">

                        <?php
                            
                            $sql = "SELECT * FROM `catagory`";
                            $result = mysqli_query($con, $sql);
                            
                            if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){

                        ?>

                            <div class="item">
                                <!-- catagory -->
                                <div class="catagory">
                                    <div class="catagory-img-div">
                                        <img src="<?php echo "resources/img/cat_img/".$row['cat_img'];?>" alt="catagory" class="catagory-img img-thumbnail ">
                                    </div>
                                    <div class="catagory-name">
                                        <a href="#" class="stretched-link"><?php echo ucfirst($row['cat_name']);?></a>
                                    </div>
                                </div>
                            </div>
                        
                        <?php
                                }//end of while
                            }//end of if condition
                        ?>


                    </div>
                </div>
            </div>
        </section>
        <!-- CATAGORIES section Ends -->