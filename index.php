<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
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


    <!--Main Starts  -->
    <main>


    <?php

        include("_partial-temp/_land-page.php");


        include("_partial-temp/_catagories.php");

        
        include("_partial-temp/_feature.php");

        
        include("_partial-temp/_deal-recommand.php");

        
        include("_partial-temp/_trend-items.php");

        
        include("_partial-temp/_dbl-ad.php");

        
        include("_partial-temp/_desert.php");

        
        include("_partial-temp/_lunch.php");

        
        include("_partial-temp/_sngl-ad.php");

        
        include("_partial-temp/_know-more.php");

        
        include("_partial-temp/_home-articles.php");

        
        include("_partial-temp/_newsletter.php");


        
        // include("_partial-temp");
    ?>




    </main>
    <!--Main Ends  -->  
   

    <!-- INCLUDING FOOTER AND JS LINKS -->
    <?php
        include("_partial-temp/_footer.php");
    ?>



</body>
</html>