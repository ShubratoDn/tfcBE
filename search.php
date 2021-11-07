<?php
    session_start();
    include('database/DBcontroller.php');

    if(isset($_GET['category'])){
        $cat_name = $_GET['category'];
    }

    if(isset($_GET['cat_id'])){
        $cat_id = $_GET['cat_id'];
    }

    $f_cat_sql = "SELECT * FROM `catagory` WHERE cat_name='$cat_name' AND cat_id='$cat_id'";
    $f_cat_result = mysqli_query($con, $f_cat_sql);

    if(mysqli_num_rows($f_cat_result)>0){

    }else{
        ?>
            <script>
                location.replace('index.php');
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

    <!-- Incluidng head links -->
    <?php
        include("_partial-temp/_head-link.php");
    ?>

</head>
<body>
    

    <?php
        // INCLUDING NAV MENU LOADER AND TOP
        include("_partial-temp/_nav.php");
        
    ?>



    <!-- main section starts  -->
    <main>
        <!-- page banner starts -->
        <div class="page-banner" style="background-image: url('resources/img/about-bg.jpg');">
            <h1 class="banner-text">
                <?php echo $cat_name; ?>
            </h1>
        </div>
        <!-- page banner Ends -->
        

        <div class="container-fluid py-5">

            <div>
                <a href="index.php">Home</a> / 
                <?php echo $cat_name;?> 
            </div> 

            <div class="item-container mt-5">
                <!-- food item card -->
                <?php

                    $sql = "SELECT * FROM `item_info` WHERE item_cat_id IN ($cat_id)  ORDER BY item_id DESC";
                    $result = mysqli_query($con, $sql);

                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){

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

                <?php
                
                        } //end  of while
                    }else{ //end of if
                        echo "<h1 class='text-red m-auto'>There is no item for this Category</h1>";
                    }
                ?>


            </div>  
        </div>

      
        
    </main>
    <!-- main section Ends -->
    
   
    <!-- INCLUDING FOOTER AND JS LINKS -->
    <?php
        include("_partial-temp/_footer.php");
    ?>


</body>
</html>