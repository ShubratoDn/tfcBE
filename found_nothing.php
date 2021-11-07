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

    <style>
        @media (min-width:1300px) {
            .page-banner{
                background-position: 0 -337px;
            }
        }
    </style>
</head>
<body>
    

    <?php
        // INCLUDING NAV MENU LOADER AND TOP
        include("_partial-temp/_nav.php");
        
    ?>



    <!-- main section starts  -->
    <main>
        <!-- page banner starts -->
        <div class="page-banner" style="background-image: url('resources/img/err_bg.jpg');">
            <h1 class="banner-text">
                ERROR!
            </h1>
        </div>
        <!-- page banner Ends -->
        

        <div class="container-fluid py-5">

            <div>
                <a href="index.php">Home</a> / ---
                
            </div> 

            <div class=" mt-5 text-center">
                <h1 class="fa-2x text-red ">Nothing Found!</h1>
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