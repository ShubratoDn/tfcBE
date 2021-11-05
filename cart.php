<?php
    session_start();

    // REMOVE CART ITEM
    if(isset($_GET['remove_cart'])){
        $remove_cart = $_GET['remove_cart'];

        foreach($_SESSION['myCart'] as $key => $item){
            if($remove_cart == $item['cid']){
                unset($_SESSION['myCart'][$key]);
                ?>
                    <script>
                        location.replace("cart.php");
                    </script>
                <?php
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TFC- My Cart</title>

    
        
    <!-- Incluidng head links -->
    <?php
        include("_partial-temp/_head-link.php");
    ?>

</head>
<body>
    
    <!-- header starts -->
    <?php
        // INCLUDING NAV MENU LOADER AND TOP
        include("_partial-temp/_nav.php");
    ?>

    <!-- header ends -->



    <!-- CART PAGE STARTS -->
    <main id="cart-page">
        <div class="container py-4">
            <?php
                $itemCount = 0 ;
                $iTtlCost = 0;
                $iTtlSave = 0;
                if(isset($_SESSION['myCart'])){
                    foreach($_SESSION["myCart"] as $item):
                        $itemCount++ ;
                        $item_p = $item['cdisPrice']*$item['cqty'];
                        $iTtlCost = $iTtlCost + $item_p;

                        $item_save = ($item['cprice'] - $item['cdisPrice']) * $item['cqty'];
                        $iTtlSave = $iTtlSave + $item_save;
                    endforeach;
                }

                if($itemCount <= 0 ){
                    echo"Item  Not Found";
               }else{ //IF FILE NOT FOUND SHOW THIS
            ?>
                <div class="row">
                    <!-- cart-info -->
                    <div class="col-lg-8 my-4">
                        <div class="cart-info">
                        
                            <!-- cart info start -->
                            <div class="cart-info-head mb-4">
                                <div>
                                    <h2>My Cart (<?php echo $itemCount?> Items)</h2>
                                </div>
                                <div>
                                    <h2 class=" m-0">Total: <?php echo $iTtlCost+50?> TK</h2>
                                    <strong class=" font-14">You are saving total TK. <?php echo $iTtlSave?></strong>
                                </div>
                            </div>

                            <!-- cart-items -->
                            <div class="cart-items">

                                <!-- ============================= -->
                                <!-- CART PHP CODE -->
                                <!-- ============================= -->
                                <?php

                                    if(isset($_SESSION["myCart"])){
                                        // unset($_SESSION["myCart"]);

                                        foreach($_SESSION["myCart"] as $item):

                                            // echo  $item['cid'] ."<br>";
                                            // echo  $item['cname'] ."<br>";
                                            // echo  $item['cqty'] ."<br>";
                                            // echo  "<hr>";
                                            // print_r($_SESSION['myCart']);
                                ?>
                                    <!-- cart item -->
                                    <div class="cart-item-card">
                                        <form action="" class="cart-item">
                                            <div class="cart-left">
                                                <a href="item.php?item_id=<?php echo $item['cid']?>" class="cart-img">
                                                    <!-- cart image -->
                                                    <img src="<?php echo $adRedirect."resources/img/item_img/".$item['cimg']?>" alt="">
                                                </a>
                                                <!-- cart item info -->
                                                <div class="cart-item-info">
                                                    <!-- item name -->
                                                    <h2 class=" font-weight-lighter"><?php echo $item['cname'];?></h2>
                                                    <!-- item category -->
                                                    <div class="item-catagory"><?php echo $item['ccat'];?></div>
                                                    <!-- product price -->
                                                    <div class="price">
                                                        <div class="c-price mr-3">৳<?php echo $item['cdisPrice']*$item['cqty'];?></div>
                                                        <div class="del-price font-14">৳<?php echo $item['cprice']*$item['cqty'];?></div>
                                                        <a href="cart.php?remove_cart=<?php echo $item['cid']?>" class="remove-item-btn ml-4">
                                                            <i class="fa fa-trash-o"></i>
                                                        </a>
                                                    </div>  
                                                </div>
                                            </div>
                                            <!-- item cart quantity -->
                                            <div class="cart-item-qty">
                                                <div class="quantity">
                                                    <i class="fa fa-minus quan-down"></i>
                                                    <input type="number" name="" id="" value="<?php echo $item['cqty']?>" class="quan-input" disabled>
                                                    <i class="fa fa-plus quan-up"></i>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                <!-- END OF FOR EACH -->
                                <?php
                                        endforeach;
                                    }
                                ?>
                                
                            </div>

                        </div>
                    </div>

                    <!-- CHECKOUT SUMMARY -->
                    <div class="col-lg-4 my-4">
                        <!-- check out summary -->
                        <div id="chkout-sum">
                            <div class="chk-sum-head">
                                <h2 class=" font-weight-light">Checkout Summary</h2>
                            </div>
                            <!-- money info -->
                            <div class="mny-sum">
                                <!-- check out summary row -->
                                <div class="chkout-sum-row">
                                    <div class="chkout-sum-lbl">Subtotal (<?php echo $itemCount?>  items)</div>
                                    <div class="chkout-sum-val"><?php echo $iTtlCost?> TK.</div>
                                </div>
                                <!-- check out summary row -->
                                <div class="chkout-sum-row">
                                    <div class="chkout-sum-lbl">Delivery</div>
                                    <div class="chkout-sum-val">50 TK.</div>
                                </div>

                                <!-- check out summary row -->
                                <div class="chkout-total-row mt-4 font-18">
                                    <div class="chkout-ttl-lbl font-weight-bolder">Total</div>
                                    <div class="chkout-ttl-val text-success font-weight-bolder"><?php echo $iTtlCost+50?> TK.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
             }
            ?>
        </div>
    </main>


    <!-- Including footer -->    
    <?php
        include($adRedirect."_partial-temp/_footer.php");
    ?>



</body>
</html>