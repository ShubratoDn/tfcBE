<?php
    session_start();
    if(isset($_SESSION["user_id"])){        
        ?>
            <script>
                location.replace("../index.php");
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

    <!-- including head links -->
    <?php
        include("_head-link.php");
    ?>
</head>
<body>


    <?php
        // including nav bar
        include($adRedirect."_partial-temp/_nav.php");
    
    ?>


    <main>
        <?php
            // including nav bar
            error_reporting(0);
            include("_user-register.php");
        ?>
    </main>


    <!-- including footer -->
    <?php
        include($adRedirect."_partial-temp/_footer.php");
    ?>



</body>
</html>