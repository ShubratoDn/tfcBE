<?php
    session_start();
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


    <?php 
        $food_id = $_GET["item_id"];
        $sql = "SELECT * FROM `item_info` WHERE item_id='$food_id'";
        $result = mysqli_query($con, $sql);

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
                                        &nbsp; || <a href="#">  <?php echo $row["item_t_review"]?> FeedBack for this item</a>
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

                                <!-- FORM STARTS -->
                                <form action="#">
                                    <!-- quantity section -->
                                    <div class="quantity-div d-flex align-items-center justify-content-between">
                                        <div>
                                            <b>Quantity :</b>
                                        </div>
                                        <div class="quantity">
                                            <i class="fa fa-minus quan-down"></i>
                                            <input type="number" name="" id="" value="0" class="quan-input" disabled>
                                            <i class="fa fa-plus quan-up"></i>
                                        </div>
                                    </div>
                                    <!-- <small class=" text-danger">This is a short message</small> -->

                                    <div class="cart-buy">
                                        <input type="submit" value="Buy Now" class="buy-btn">
                                        <input type="submit" value="Add to Cart" class="add-cart-btn">
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
                <div class="product-bottom">
                    <div class="product-name">
                        Product details of <?php echo ucfirst(strtolower($row["item_name"]))?>
                    </div>

                    <div id="div-toggle">
                        <ul class="nav">
                            <li class="nav-item"><a  data-toggle="tab" class="toggle-btn active" data-target="#item-f-info">Product info</a></li>                        
                            <li  class="nav-item"><a  data-toggle="tab" class="toggle-btn" data-target="#item-fdback">Feedbacks</a></li>
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
                                <!-- FEEDBACK -->
                                <div class="item">
                                    <div class="feedback">
                                        <div class="fd-top">
                                            <!-- user image -->
                                            <img src="resources/img/user.png" alt="" class="fd-img">
                                            <div class="fd-user-info">
                                                <!-- user name -->
                                                <div class="fd-user-name">Shubrato Debnath</div>
                                                <div class="fd-rate-date d-flex align-items-center">
                                                    <div class="rating">
                                                        <!-- deal rating -->
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star-o"></i>
                                                    </div>
                                                    <div class="fd-time">10th October, 2021</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- feedback text -->
                                        <div class="fd-text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus quam est quidem, expedita consectetur voluptates nemo, aut odio dignissimos ducimus. Tempora adipisci officiis voluptatem sequi debitis, porro iste perspiciatis atque dignissimos quis eos vero est iusto fugit ad modi deserunt numquam animi aliquam veritatis dolorem quaerat quam quia minima?</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FEEDBACK -->
                                <div class="item">
                                    <div class="feedback">
                                        <div class="fd-top">
                                            <!-- user image -->
                                            <img src="resources/img/user.png" alt="" class="fd-img">
                                            <div class="fd-user-info">
                                                <!-- user name -->
                                                <div class="fd-user-name">Shubrato Debnath</div>
                                                <div class="fd-rate-date d-flex align-items-center">
                                                    <div class="rating">
                                                        <!-- deal rating -->
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star-o"></i>
                                                    </div>
                                                    <div class="fd-time">10th October, 2021</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- feedback text -->
                                        <div class="fd-text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus quam est quidem, expedita consectetur voluptates nemo, aut odio dignissimos ducimus. Tempora adipisci officiis voluptatem sequi debitis, porro iste perspiciatis atque dignissimos quis eos vero est iusto fugit ad modi deserunt numquam animi aliquam veritatis dolorem quaerat quam quia minima?</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FEEDBACK -->
                                <div class="item">
                                    <div class="feedback">
                                        <div class="fd-top">
                                            <!-- user image -->
                                            <img src="resources/img/user.png" alt="" class="fd-img">
                                            <div class="fd-user-info">
                                                <!-- user name -->
                                                <div class="fd-user-name">Shubrato Debnath</div>
                                                <div class="fd-rate-date d-flex align-items-center">
                                                    <div class="rating">
                                                        <!-- deal rating -->
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star-o"></i>
                                                    </div>
                                                    <div class="fd-time">10th October, 2021</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- feedback text -->
                                        <div class="fd-text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus quam est quidem, expedita consectetur voluptates nemo, aut odio dignissimos ducimus. Tempora adipisci officiis voluptatem sequi debitis, porro iste perspiciatis atque dignissimos quis eos vero est iusto fugit ad modi deserunt numquam animi aliquam veritatis dolorem quaerat quam quia minima?</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FEEDBACK -->
                                <div class="item">
                                    <div class="feedback">
                                        <div class="fd-top">
                                            <!-- user image -->
                                            <img src="resources/img/user.png" alt="" class="fd-img">
                                            <div class="fd-user-info">
                                                <!-- user name -->
                                                <div class="fd-user-name">Shubrato Debnath</div>
                                                <div class="fd-rate-date d-flex align-items-center">
                                                    <div class="rating">
                                                        <!-- deal rating -->
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star-o"></i>
                                                    </div>
                                                    <div class="fd-time">10th October, 2021</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- feedback text -->
                                        <div class="fd-text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus quam est quidem, expedita consectetur voluptates nemo, aut odio dignissimos ducimus. Tempora adipisci officiis voluptatem sequi debitis, porro iste perspiciatis atque dignissimos quis eos vero est iusto fugit ad modi deserunt numquam animi aliquam veritatis dolorem quaerat quam quia minima?</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FEEDBACK -->
                                <div class="item">
                                    <div class="feedback">
                                        <div class="fd-top">
                                            <!-- user image -->
                                            <img src="resources/img/user.png" alt="" class="fd-img">
                                            <div class="fd-user-info">
                                                <!-- user name -->
                                                <div class="fd-user-name">Shubrato Debnath</div>
                                                <div class="fd-rate-date d-flex align-items-center">
                                                    <div class="rating">
                                                        <!-- deal rating -->
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star"></i>
                                                        <i class=" fa fa-star-o"></i>
                                                    </div>
                                                    <div class="fd-time">10th October, 2021</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- feedback text -->
                                        <div class="fd-text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus quam est quidem, expedita consectetur voluptates nemo, aut odio dignissimos ducimus. Tempora adipisci officiis voluptatem sequi debitis, porro iste perspiciatis atque dignissimos quis eos vero est iusto fugit ad modi deserunt numquam animi aliquam veritatis dolorem quaerat quam quia minima?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- item info section Ends -->

    <?php
        }else{
            ?>
                <script>
                    location.replace("index.php");
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