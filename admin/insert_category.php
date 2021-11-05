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
    <title>TFC Admin- Insert Category</title>
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
                          <h1 class="card-title">Insert Category</h1>
                          <p class="card-description"> </p>



                          <!-- ============================ -->
                          <!-- php codes for ITEM INSERT -->
                          <!-- ============================ -->
                          <?php

                            if(isset($_POST["insert_cat"])){
                              $error = NULL;

                              $cat_name = $_POST["cat_name"];
                              // Get image 
                              $cat_img = $_FILES["cat_img"];
                              $img_name = $_FILES["cat_img"]["name"];
                              @$img_type =  strtolower(end(explode(".", $img_name)));
                              $img_temp_name = $_FILES["cat_img"]["tmp_name"];
                              $img_error = $_FILES["cat_img"]["error"];
                              $img_size = $_FILES["cat_img"]["size"];
                              $img_name = bin2hex(random_bytes(10)).$img_name;
                              $move_img = "../resources/img/cat_img/". $img_name;

             
                              // SANITIZING ITEM
                              $cat_name = filter_var($cat_name,FILTER_SANITIZE_STRING);

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
                                $error .= "<p class='py-4'>Insert Category Image</p>";
                              }



                              // --------------------------------------\\
                                    // IF ALL IS OKAY
                              // --------------------------------------\\
                              if(!$error){
                                $chk_sql = "SELECT * FROM `catagory` WHERE cat_name='$cat_name'";                                
                                $chk_result = mysqli_query($con, $chk_sql);

                                // CHECKING FOR ALREADY INSERTED OR NOT
                                if(mysqli_num_rows($chk_result)>0){
                                  $error .= "<p>You have already inserted this Category.</p>";
                                }else{
                                  // AFTER ALL OKAY
                                  $ins_sql = "INSERT INTO `catagory`(`cat_name`, `cat_img`) VALUES ('$cat_name', '$img_name')";

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
                              <!-- Category Name -->
                              <div class="form-group w-48">
                                  <label for="cat_name">Category name</label>
                                  <input required type="text" value="<?php if(isset($error)){echo $cat_name; }?>" name="cat_name" class="form-control" id="cat_name" placeholder="Category Name">
                              </div>

                              <!-- item image -->
                              <div class="form-group w-48">
                                  <label for="Category image">Category image <span style=" color: #818e8e"> (less 500kb)</span></label>
                                  <input type="file" name="cat_img" class="form-control" id="Category image" placeholder="Category image">
                              </div>

                              <!-- Check for category -->
                              <div class="form-group w-100">
                                  <label for="cat_srch"> Search Category</label>
                                  <input type="text" placeholder="Check for Category" class="form-control" id="cat_srch" list="cat_srch_list">

                                  <datalist id="cat_srch_list">
                                    <?php
                                        $cat_sql = "SELECT * FROM `catagory` ORDER BY cat_name ASC";
                                        $cat_result = mysqli_query($con, $cat_sql);

                                        if(mysqli_num_rows($cat_result)>0){
                                            while($cat_row = mysqli_fetch_assoc($cat_result)){
                                                echo "<option>".$cat_row["cat_name"]."</option>";
                                            }
                                        }
                                    ?>
                                  </datalist>
                                
                              </div>


                              <div class="form-group text-center">
                                <input type="submit" name="insert_cat" value="Add Category"  class="btn btn-gradient-success px-5">
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