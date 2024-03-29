

                        <section id="recommend-item-section" class="m-5 m-md-0">
                            <div class="title font-16 m-0">
                                Recommendation for You
                            </div>
                            <hr>
                            <div class="owl-carousel owl-theme my-5">
                            
                                <?php

                                    $sql = "SELECT * FROM `item_info` WHERE item_rating = 5 ORDER BY item_id DESC";
                                    $result = mysqli_query($con, $sql);

                                    if(mysqli_num_rows($result)){
                                        $count = 1;

                                        while($row = mysqli_fetch_assoc($result)){
                                            $count ++;
                                            if($count >11){
                                                break;
                                            }

                                        $price = $row["item_price"];
                                        $discount = $row["item_discount"];
                                        $disPrice = ($price * $discount)/100;
                                        $disPrice = round($price - $disPrice );
                                        $rating = $row["item_rating"];
                                        $cat_id = $row["item_cat_id"];

                                        $cat_sql = "SELECT * FROM `catagory` WHERE cat_id = '$cat_id'";
                                        $cat_result = mysqli_query($con,$cat_sql);
                                        if(mysqli_num_rows($cat_result)>0){
                                            $cat_row = mysqli_fetch_assoc($cat_result);
                                            $category = $cat_row["cat_name"];
                                        }else{
                                            $category = "Uncategorized";
                                        };
                                ?>


                                    <div class="item">                                    
                                        <div class="food-item">
                                            <div class="item-img-div">
                                                <!-- food img -->
                                                <img src="<?php echo $adRedirect."resources/img/item_img/".$row["item_img"];?>" alt="" class="item-img">
                                                <!-- item info -->
                                                <a href="item.php?item_id=<?php echo $row["item_id"]?>" class="item-detail-link"><i class=" fa fa-search"></i></a>
                                            </div>
                                            <div class="discount">
                                                -<?php echo $discount?>%
                                            </div>
                                            <div class="item-info">
                                                <div class="item-name">
                                                    <!-- item name -->
                                                    <?php echo ucfirst(strtolower($row['item_name'])) ?>
                                                </div>
                                                <div class="item-pri-cat">
                                                    <!-- item category -->
                                                    <div class="item-catagory"><?php echo @$category?></div>

                                                    <!-- item price -->
                                                    <div class="price">
                                                        <div class="del-price">৳<?php echo $price?></div>
                                                        <div class="c-price">৳<?php echo @$disPrice?></div>
                                                    </div> 
                                                </div>
                                            </div>        

                                            <div class="item-card-footer">                                            
                                                <div class="item-rate">                                                
                                                    <div class="rating">
                                                        <!-- deal rating -->
                                                        <?php include($adRedirect)."_partial-temp/_item-rating.php"?>
                                                    </div>
                                                    <div class="item-review"> <?php echo $row["item_t_review"]?> Reviews</div>
                                                </div>                                                                                                       
                                            </div>
                                        </div>
                                    </div> 

                                    
                                <?php
                                        } //end  of while
                                    } //end of if

                                ?>
                            </div>
                        </section>
