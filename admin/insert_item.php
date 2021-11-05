<?php
  session_start();

  if(!isset($_SESSION["admin_id"])){
    ?>
      <script>
        location.replace("login.php");
      </script>
    <?php
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TFC Admin</title>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">

    <?php
      include("_ad_partial/_admin-head.php");
    ?>

  </head>
  <body>
    <div class="container-scroller">

    <!-- =============== -->
    <!-- //incluing navbar -->
      <?php
        include("_ad_partial/_navbar.php");
      ?>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
          <!-- =============== -->
          <!-- SIDE navbar -->
          <?php
            include("_ad_partial/_sidenav.php");
          ?>

            <!-- partial -->
            <div class="main-panel">
              <!-- content-wrapper ends -->
              <div class="content-wrapper">
                  <div class="col-md-12 grid-margin stretch-card">
                      <!-- default form starts -->
                      <div class="card">
                        <div class="card-body">
                          <h1 class="card-title">Insert Food Item</h1>
                          <p class="card-description"> </p>



                          <!-- ============================ -->
                          <!-- php codes for ITEM INSERT -->
                          <!-- ============================ -->
                          <?php

                            if(isset($_POST["insert_item"])){
                              $error = NULL;

                              $item_name = $_POST["item_name"];
                              $category = $_POST["category"];
                              $item_price = $_POST["item_price"];
                              $discount = $_POST["discount"];
                              $rate = $_POST["rate"];
                              $chefs = $_POST["chefs"];
                              $ingredients = $_POST["ingredients"];
                              $about_item = $_POST["about_item"];

                              // Get image 
                              $item_img = $_FILES["item_img"];
                              $img_name = $_FILES["item_img"]["name"];
                              @$img_type =  strtolower(end(explode(".", $img_name)));
                              $img_temp_name = $_FILES["item_img"]["tmp_name"];
                              $img_error = $_FILES["item_img"]["error"];
                              $img_size = $_FILES["item_img"]["size"];
                              $img_name = bin2hex(random_bytes(10)).$img_name;
                              $move_img = "../resources/img/item_img/". $img_name;

             
                              // SANITIZING ITEM
                              $item_name = filter_var($item_name,FILTER_SANITIZE_STRING);
                              $category = filter_var($category,FILTER_SANITIZE_STRING);
                              $item_price = filter_var($item_price,FILTER_SANITIZE_NUMBER_INT);
                              $discount = filter_var($discount,FILTER_SANITIZE_NUMBER_INT);
                              // $rate = filter_var($rate,FILTER_SANITIZE_NUMBER_FLOAT);
                              $chefs = filter_var($chefs,FILTER_SANITIZE_STRING);
                              $ingredients = filter_var($ingredients,FILTER_SANITIZE_STRING);
                              $about_item = filter_var($about_item,FILTER_SANITIZE_STRING);


                              if(!$rate){
                                $rate = 5;
                              }

                              // ITEM IMAGE SIZE SETTING
                              if($img_size>1000){
                                if($img_size>1000000){
                                  $error .= "<p>Too large image file!</p>";
                                }else{
                                    switch ($img_type){
                                      case "jpg":                                        
                                      case "jpeg":                                        
                                      case "gif":                                        
                                      case "png":
                                      // if got correct format then moving the file
                                      @$upload_photo = "upload";
                                      break;

                                      default :
                                      $error .=  "<p>Invalid Format! Only JPG, JPEG, PNG & GIF files are allowed.</p>";
                                    }
                                }  
                              }else{
                                $error .= "<p class='py-4'>Insert Item Image</p>";
                              }



                              // --------------------------------------\\
                                    // IF ALL IS OKAY
                              // --------------------------------------\\
                              if(!$error){
                                $chk_sql = "SELECT * FROM `item_info` WHERE item_name='$item_name' AND item_cat_id='$category' AND item_price='$item_price' AND item_discount='$discount'";                                
                                $chk_result = mysqli_query($con, $chk_sql);

                                // CHECKING FOR ALREADY INSERTED OR NOT
                                if(mysqli_num_rows($chk_result)>0){
                                  $error .= "<p>You have already inserted this item.</p>";
                                }else{
                                  // AFTER ALL OKAY
                                  $ins_sql = "INSERT INTO `item_info`(`item_name`, `item_cat_id`, `item_img`, `item_price`, `item_discount`, `item_rating`, `item_t_review`, `item_info_text`, `chef_name`, `ingredients`)
                                                   VALUES ('$item_name','$category','$img_name','$item_price', '$discount','$rate','0','$about_item','$chefs','$ingredients')";

                                  if(mysqli_query($con, $ins_sql)){

                                    if(move_uploaded_file($img_temp_name,$move_img)){
                                      $success = "<p class='p-3 font-weight-bold'>Inserted Food Item</p>";
                                    }else{
                                      $error .=" FAILED to Move image. Because :". mysqli_error($con);
                                    }
                                   
                                  }else{
                                    $error .=" FAILED to insert. Because :". mysqli_error($con);
                                  };

                                }
                              } //IF NO ERROR

                            }

                          ?>

                            <!-- if error then SHOW ERROR MESSAGE -->
                            <div class="error-msg alert alert-danger p-0 border-0">
                              <?php if(@$error){echo $error;}?>
                            </div>

                            <div class="error-msg alert alert-success p-0 border-0">
                              <?php if(@$success){echo $success;}?>
                            </div>

                          <form class="insert-form" action="<?php echo htmlentities($_SERVER["PHP_SELF"])?>" method="POST" enctype="multipart/form-data">
                              <!-- Item Name -->
                              <div class="form-group w-48">
                                  <label for="item_name">Item name</label>
                                  <input required type="text" value="<?php if(isset($error)){echo $item_name; }?>" name="item_name" class="form-control" id="item_name" placeholder="Item Name">
                              </div>

                              <!-- item image -->
                              <div class="form-group w-48">
                                  <label for="Item image">Item image <span style=" color: #818e8e"> (less 500kb)</span></label>
                                  <input type="file" name="item_img" class="form-control" id="Item image" placeholder="Item image">
                              </div>

                              <!-- item category -->
                              <div class="form-group w-48">
                                  <label for="Item Category">Item Category</label>
                                  <select name="category" id="Item Category" class="form-control" required>
                                      <option value="">~~ CHOOSE CATEGORY ~~</option>
                                      <!-- ADDING CATEGORIES OPTION -->
                                      <?php
                                        $cat_sql = "SELECT * FROM `catagory` ORDER BY cat_name ASC";
                                        $cat_result = mysqli_query($con, $cat_sql);
                                        if(mysqli_num_rows($cat_result)>0){
                                          while($cat_row = mysqli_fetch_assoc($cat_result)){
                                            ?>
                                              <option <?php if(isset($category)){if($category === $cat_row["cat_id"]){echo "selected";}} ?> value="<?php echo $cat_row["cat_id"]?>" ><?php echo ucfirst($cat_row["cat_name"])?></option>
                                            <?php
                                          }
                                        }//end of cat if
                                      
                                      ?>
                                  </select>
                              </div>

                              <!-- Item Price -->
                              <div class="form-group w-48">
                                  <label for="Item price">Item price <span style=" color: #818e8e"> (in TK)</span></label>
                                  <input required type="number" value="<?php if(isset($error)){echo $item_price; }?>" name="item_price" class="form-control" id="Item price" placeholder="123 TK">
                              </div>

                              <!-- Item dicount -->
                              <div class="form-group w-48">
                                  <label for="Item Discount">Item Discount<span style=" color: #818e8e"> (in %)</span></label>
                                  <input required type="number" max="90" min="0" value="<?php if(isset($error)){echo $discount; }?>" name="discount" class="form-control" id="Item Discount" placeholder="00%">
                              </div>

                              <!-- Initial Rate -->
                              <div class="form-group w-48">
                                  <label for="Initial Rating">Initial Rating <span style=" color: #818e8e">(out of 5)</span></label>
                                  <input type="number" value="<?php if(isset($error)){echo $rate; }?>" name="rate" step="0.1" max="5" min="0" class="form-control" id="Initial Rating" placeholder="1 to 5" >
                              </div>

                              <!-- Chef Name -->
                              <div class="form-group w-48">
                                  <label for="Chef Name">Chef Name</label>
                                  <input value="<?php if(isset($error)){echo $chefs; }?>" name="chefs" id="Chef Name" class="form-control" placeholder="Shubrato Debnath, Akash Dn">
                              </div>

                              <!-- Ingredients -->
                              <div class="form-group w-48">
                                  <label for="Ingredients">Ingredients</label>
                                  <input value="<?php if(isset($error)){echo $ingredients; }?>" name="ingredients" id="Ingredients" class="form-control" placeholder="oil, water, potato">
                              </div>

                              <!-- About item -->
                              <div class="form-group">
                                  <label for="about item">About item</label>
                                  <textarea name="about_item" id="about item" cols="30" rows="10" class="form-control text-left p-3" placeholder="Write something about this item..."><?php if(isset($error)){echo $about_item; }?></textarea>
                              </div>


                              <div class="form-group text-center">
                                <input type="submit" name="insert_item" value="Add Item"  class="btn btn-gradient-success px-5">
                              </div>

                            </form>
                          </div>
                      </div>
                      <!-- default form starts -->
                  </div>
              </div>
              <!-- content-wrapper ends -->
          </div>
          <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- ENDS OF container-scroller -->



    <?php
      include("_ad_partial/_ad_footer.php")
    ?>


  </body>
</html>