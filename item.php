<?php
    session_start();
 
    $food_id = $_GET["item_id"];
    if(!isset($food_id)){
        ?>
            <script>
                // location.replace("<?php
                // echo "index.php"?>");
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
    <title>Tamai Food cart- Fastest fresh fast food restaurent</title>
    
    <?php
        //INCLUDING HEAD LINKS
        include(@$adRedirect."_partial-temp/_head-link.php");
    
    ?>

    <style>
        body{
            background-color: #eef3ff !important;
        }
    </style>
</head>
<body>
    
    <?php
        // INCLUDING NAV MENU LOADER AND TOP
        include($adRedirect."_partial-temp/_nav.php");
    ?>


    <!-- =========================== -->
            <!-- ADD TO CART -->
    <!-- =========================== -->
    <?php

        if(isset($_POST["add_to_cart"])){

            // checking for login
            if(isset($_SESSION['user_id'])){
                $_SESSION["myCart"][] = array(
                    'cid'=> $_POST['cart_id'],
                    'cname' => $_POST['cart_name'],
                    'ccat' => $_POST['cart_cat'],
                    'cimg'=> $_POST['cart_img'],
                    'cdisPrice'=> $_POST['cart_disprice'],
                    'cprice'=> $_POST['cart_price'],
                    'cdisc'=> $_POST['cart_disc'],
                    'cqty'=> $_POST['cart_qty'],
                );
                
                ?>
                    <script>
                        location.replace("item.php?item_id=<?php echo $_POST['cart_id']?>");
                    </script>
                <?php
            }else{
                ?>
                <!-- if not logged in then show the login modal -->
                    <script>
                        var modal = document.querySelector(".modal-box");
                        modal.style.display = "flex";
                    </script>
                <?php
            }
        }
    ?>
    <!-- =========================== -->
            <!-- ADD TO CART ENDS-->
    <!-- =========================== -->



    <?php 
        @$food_id = $_GET["item_id"];
        $sql = "SELECT * FROM `item_info` WHERE item_id='$food_id'";
        $result = mysqli_query($con, $sql);


        // GETTING PRODUCT INFO
        if(mysqli_num_rows($result) == 1){

            $row = mysqli_fetch_assoc($result);
            
            // fot item category
            $cat_id = $row["item_cat_id"];
            $sql = "SELECT * FROM `catagory` WHERE cat_id = '$cat_id'";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0){
                $cat_row = mysqli_fetch_assoc($result);
                $category = $cat_row["cat_name"];
            }else{
                $category = "Uncategorized";
            };

            // for price
            $price = $row["item_price"];
            $discount = $row["item_discount"];
            $disPrice = ($price * $discount)/100;
            $disPrice = round($price - $disPrice );

            $rating = $row["item_rating"];
    ?>

        <!-- item info section starts -->
        <section id="product-page">
            <div class="container-fluid">
                <div class="product-top">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 p-2rem product-page-food-img-div">
                            <!-- product Disc -->
                            <div class="discount">
                                -<?php echo $discount?>%
                            </div>
                            <!-- PRODUCT IMAGE -->
                            <img src="<?php echo $adRedirect."resources/img/item_img/".$row["item_img"];?>" alt="" class="product-page-food-img">
                        </div>
                        <div class="col-lg-4 col-md-8 p-2rem">
                            <!-- product details -->
                            <div class="product-details">
                                <p class="product-name">
                                    <!-- name -->
                                    <?php echo $row["item_name"]?>
                                </p>
                                <div class="rate-fdback">
                                    <div class="rating">
                                        <!-- deal rating -->
                                        <?php include($adRedirect."_partial-temp/_item-rating.php")?>
                                    </div>
                                    <div class="fdback">
                                        &nbsp; || <a href="#product_more" onclick="showFdb()">  <?php echo $row["item_t_review"]?> FeedBack for this item</a>
                                    </div>
                                </div>
                                <p>
                                    <!-- catagory -->
                                    <b>Catagory : </b> <?php echo ucfirst($category) ?> | Get more <a href="#" class=" text-red"> <?php echo ucfirst($category) ?></a> items
                                </p>

                                <hr>
                                <!-- item price -->
                                <div class="price">
                                    <div class="c-price">৳<?php echo @$disPrice?></div>
                                    <div class="del-price">৳<?php echo $price?></div>
                                </div> 

                                <hr>

                                <!--=================================-->
                                <!-- ADD TO CART FORM STARTS -->
                                <!--=================================-->
                                <form action="#" method="POST">
                                    <!-- quantity section -->
                                    <div class="quantity-div d-flex align-items-center justify-content-between">
                                        <div>
                                            <b>Quantity :</b>
                                        </div>
                                        <div class="quantity">
                                            <i class="fa fa-minus quan-down"></i>
                                            <input type="number" name="cart_qty" value="1" min="1" max="10" class="quan-input" >
                                            <i class="fa fa-plus quan-up"></i>
                                        </div>
                                    </div>
                                    <!-- <small class=" text-danger">This is a short message</small> -->
                                    
                                    <!-- ADDITIONAL INPUT -->
                                    <input type="hidden" name="cart_id" value="<?php echo $row["item_id"]?>">
                                    <input type="hidden" name="cart_name" value="<?php echo $row["item_name"]?>">
                                    <input type="hidden" name="cart_cat" value="<?php echo $category?>">
                                    <input type="hidden" name="cart_img" value="<?php echo $row["item_img"]?>">
                                    <input type="hidden" name="cart_disprice" value="<?php echo $disPrice?>">
                                    <input type="hidden" name="cart_price" value="<?php echo $price;?>">
                                    <input type="hidden" name="cart_disc" value="<?php echo $discount;?>">

                                    <div class="cart-buy">
                                        <input type="submit" value="Buy Now" class="buy-btn">

                                        <?php
                                        // SHowing Add to cart buutton
                                            $showCartBtn = true;
                                            if(isset($_SESSION['myCart'])){
                                                foreach($_SESSION['myCart'] as $key => $item){
                                                    if($food_id == $item['cid']){
                                                        echo '<a href="cart.php" class="add-cart-btn bg-success text-decoration-none text-white" style="padding-top:8px;padding-bottom:8px">View Cart</a>';
                                                        $showCartBtn = false;
                                                    }
                                                }
                                            }

                                            if($showCartBtn){
                                                echo '<input type="submit" value="Add to Cart" class="add-cart-btn" name="add_to_cart">';
                                            }

                                        ?>
                                        
                                    </div>
                                </form>
                                <!-- FORM Ends -->

                                
                                <hr>
                                <div class="prob-req">
                                    <small class=" font-weight-bold">Have questions about product no: <?php echo $row["item_id"]?> ?</small>
                                    <a href="tel: +8801759458961" class=" text-red d-block"><i class="fa fa-phone mr-2"></i><small>+8801759458961</small></a>
                                </div>

                            </div>
                        </div>

                        <!-- Item deliver info -->
                        <div class="col-lg-3 col-md-4 product-deliver-info p-2rem">
                            <div class="address">
                                <p>Deliver Location</p>
                                <p class=" text-muted"><i class=" fa fa-map-marker font-16 mr-3"></i>Sirajganj, Enayetpur, Vuiyarhat</p>
                                <a href="#">Change Location</a>
                            </div>
                            <hr>
                            <p class=" text-muted"><i class=" fa fa-paper-plane font-16 mr-3"></i>Delivery Charge <b>TK. 50</b></p>
                        </div>
                    </div>
                </div>










                <!-- product bottom section starts -->
                <div class="product-bottom" id="product_more">
                    <div class="product-name">
                        <span style="font-weight: 100;"> Product details of</span> <strong style="font-weight: bolder;"> <?php echo ucfirst(strtolower($row["item_name"]))?> </strong>
                    </div>

                    <div id="div-toggle">
                        <ul class="nav">
                            <li class="nav-item"><a  data-toggle="tab" class="toggle-btn show_PF_btn active" data-target="#item-f-info">Product info</a></li>                        
                            <li  class="nav-item"><a  data-toggle="tab" class="toggle-btn show_fdb_btn" data-target="#item-fdback">Feedbacks</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <!-- item info -->
                        <div id="item-f-info" class="tab-pane active">
                            <!-- product info text -->
                            <p>
                                <?php echo $row["item_info_text"]?>
                            </p>
                            <br>
                            <!-- chef name -->
                            <p><b>Chef : </b> <?php echo ucwords($row["chef_name"])?> </p>

                            <!-- ingredients -->
                            <p><b>Ingredients : </b> <?php echo ucfirst($row["ingredients"])?> </p>
                        </div>  


                        <!-- item feedBack -->
                        <div id="item-fdback" class="tab-pane"> 
                            <div class="owl-carousel owl-theme">

                                <?php
                                    $find_item_fdb = "SELECT * FROM `user_feedback`  WHERE item_id = '$food_id' ORDER BY timestamp DESC "; 
                                    $fdb_query = mysqli_query($con, $find_item_fdb); 

                                    if(mysqli_num_rows($fdb_query)>0){

                                        while($fdb_row = mysqli_fetch_assoc($fdb_query)){
                                           $fdb_user_id = $fdb_row['user_id'];

                                           $sql_fdb_user_dtl = "SELECT * FROM `user_info` WHERE user_id='$fdb_user_id'";
                                           if(mysqli_query($con, $sql_fdb_user_dtl)){

                                                $row_user_info = mysqli_fetch_assoc(mysqli_query($con, $sql_fdb_user_dtl));

                                                // feedback info
                                                $fdb_user_name = $row_user_info['fname']." ".$row_user_info['lname'];
                                                $rating = $fdb_row['rate'];
                                                $fdb_user_date = $fdb_row['timestamp'];
                                                $fdb_user_text = $fdb_row['feedback'];
                                           }

                                ?>
                                    <!-- FEEDBACK -->
                                    <div class="item">
                                        <div class="feedback">
                                            <div class="fd-top">
                                                <!-- user image -->
                                                <img src="resources/img/user.png" alt="" class="fd-img">
                                                <div class="fd-user-info">
                                                    <!-- user name -->
                                                    <div class="fd-user-name"><?php echo $fdb_user_name?></div>
                                                    <div class="fd-rate-date d-flex align-items-center">
                                                        <div class="rating">
                                                            <!-- deal rating -->
                                                            <?php include($adRedirect)."_partial-temp/_item-rating.php"?>
                                                        </div>
                                                        <!-- feedback time -->
                                                        <div class="fd-time">
                                                        <!-- 10th October, 2021 -->
                                                            <?php 
                                                                $fdb_user_date = strtotime($fdb_user_date);
                                                                echo date("d M, Y", $fdb_user_date);
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- feedback text -->
                                            <div class="fd-text">
                                                <p>
                                                    <?php echo $fdb_user_text?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                        }//end while
                                    }else{//end IF

                                    }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- ======================== -->
                <!-- write your feedback section -->
                <!-- ======================== -->
                <?php
                    include("_partial-temp/_write_fdb.php");
                ?>


            </div>
        </section>
        <!-- item info section Ends -->


    <?php
        }else{
            ?>
                <script>
                    // location.replace("index.php");
                </script>
            
            <?php
        }//END OF ITEM PAGE INFO
    ?>


   
<!-- recommend for you -->
    <div class="container-fluid my-5 py-5">        
        <section id="recommend-item-section" class="m-5 m-md-0">
            <div class="title font-16 m-0">
                Recommendation for You
            </div>
            <hr>
            <div class="owl-carousel owl-theme">

                <div class="item">                                    
                    <!-- food item card -->
                    <div class="food-item">
                        <div class="item-img-div">
                            <img src="resources/img/catagory1.jpg" alt="" class="item-img">
                            <a href="#" class="item-detail-link"><i class=" fa fa-search"></i></a>
                        </div>
                        <div class="item-info">
                            <div class="item-name">
                               Chessey pizza
                            </div>
                            <div class="item-pri-cat">
                                <div class="item-catagory">pizza</div>
                                <!-- item price -->
                                <div class="price">
                                    <div class="del-price">৳480</div>
                                    <div class="c-price">৳380</div>
                                </div> 
                            </div>
                        </div>        

                        <div class="item-card-footer">                                            
                            <div class="item-rate">                                                
                                <div class="rating">
                                    <!-- deal rating -->
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star-o"></i>
                                </div>
                                <div class="item-review">2144 Reviews</div>
                            </div>                                                                                                       
                        </div>
                    </div>
                </div> 

                <div class="item">                                    
                    <!-- food item card -->
                    <div class="food-item">
                        <div class="item-img-div">
                            <img src="resources/img/catagory2.jpg" alt="" class="item-img">
                            <a href="#" class="item-detail-link"><i class=" fa fa-search"></i></a>
                        </div>
                        <div class="item-info">
                            <div class="item-name">
                               Veg burger
                            </div>
                            <div class="item-pri-cat">
                                <div class="item-catagory">Burger</div>
                                <!-- item price -->
                                <div class="price">
                                    <div class="del-price">৳200</div>
                                    <div class="c-price">৳150</div>
                                </div> 
                            </div>
                        </div>        

                        <div class="item-card-footer">                                            
                            <div class="item-rate">                                                
                                <div class="rating">
                                    <!-- deal rating -->
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star-o"></i>
                                </div>
                                <div class="item-review">2144 Reviews</div>
                            </div>                                                                                                       
                        </div>
                    </div>
                </div> 

                <div class="item">                                    
                    <!-- food item card -->
                    <div class="food-item">
                        <div class="item-img-div">
                            <img src="resources/img/catagory3.jpg" alt="" class="item-img">
                            <a href="#" class="item-detail-link"><i class=" fa fa-search"></i></a>
                        </div>
                        <div class="item-info">
                            <div class="item-name">
                               Kacchi Biriani
                            </div>
                            <div class="item-pri-cat">
                                <div class="item-catagory">Biriani</div>
                                <!-- item price -->
                                <div class="price">
                                    <div class="del-price">৳100</div>
                                    <div class="c-price">৳150</div>
                                </div> 
                            </div>
                        </div>        

                        <div class="item-card-footer">                                            
                            <div class="item-rate">                                                
                                <div class="rating">
                                    <!-- deal rating -->
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star-o"></i>
                                </div>
                                <div class="item-review">2144 Reviews</div>
                            </div>                                                                                                       
                        </div>
                    </div>
                </div> 

                <div class="item">                                    
                    <!-- food item card -->
                    <div class="food-item">
                        <div class="item-img-div">
                            <img src="resources/img/catagory2.jpg" alt="" class="item-img">
                            <a href="#" class="item-detail-link"><i class=" fa fa-search"></i></a>
                        </div>
                        <div class="item-info">
                            <div class="item-name">
                               Veg burger
                            </div>
                            <div class="item-pri-cat">
                                <div class="item-catagory">Burger</div>
                                <!-- item price -->
                                <div class="price">
                                    <div class="del-price">৳200</div>
                                    <div class="c-price">৳150</div>
                                </div> 
                            </div>
                        </div>        

                        <div class="item-card-footer">                                            
                            <div class="item-rate">                                                
                                <div class="rating">
                                    <!-- deal rating -->
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star-o"></i>
                                </div>
                                <div class="item-review">2144 Reviews</div>
                            </div>                                                                                                       
                        </div>
                    </div>
                </div> 

                
                <div class="item">                                    
                    <!-- food item card -->
                    <div class="food-item">
                        <div class="item-img-div">
                            <img src="resources/img/catagory1.jpg" alt="" class="item-img">
                            <a href="#" class="item-detail-link"><i class=" fa fa-search"></i></a>
                        </div>
                        <div class="item-info">
                            <div class="item-name">
                               Chessey pizza
                            </div>
                            <div class="item-pri-cat">
                                <div class="item-catagory">pizza</div>
                                <!-- item price -->
                                <div class="price">
                                    <div class="del-price">৳480</div>
                                    <div class="c-price">৳380</div>
                                </div> 
                            </div>
                        </div>        

                        <div class="item-card-footer">                                            
                            <div class="item-rate">                                                
                                <div class="rating">
                                    <!-- deal rating -->
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star"></i>
                                    <i class=" fa fa-star-o"></i>
                                </div>
                                <div class="item-review">2144 Reviews</div>
                            </div>                                                                                                       
                        </div>
                    </div>
                </div> 

                
            </div>
        </section>
    </div>



    <?php
        include($adRedirect."_partial-temp/_footer.php");
    ?>


</body>
</html>