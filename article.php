<?php
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamai Food cart - Our Article</title>

      <!-- Incluidng head links -->
    <?php
        include("_partial-temp/_head-link.php");
    ?>

</head>
<body>
    
    
    <?php

        // NAV MENU
        include("_partial-temp/_nav.php");
    ?>

    <main>

        <!-- page banner starts -->
        <div class="page-banner article-banner">
            <h1 class="banner-text">OUR ARTICLES</h1>
        </div>
        <!-- page banner Ends -->

        <?php

            include("_partial-temp/_all-articles.php");

        ?>


    </main>
 

   
    <!-- INCLUDING FOOTER AND JS LINKS -->
    <?php
        include("_partial-temp/_footer.php");
    ?>


    <!-- custom script -->
    <script>

        /* ====================================== */
        /*  Article modal  */
        /* ====================================== */
        // SHOW/HIDE LOGIN MODAL
        var articleModal = document.querySelector(".article-modal");
        var articleExit = document.querySelector(".article-exit");

        articleExit.addEventListener("click",function(){
            articleModal.style.display = "none";
        });

        function  showArtModal(){
            articleModal.style.display = "flex";    
        }

        window.onclick = function(event){
            if(event.target == articleModal) {
                articleModal.style.display = "none";
            }
        }
        // SHOW/HIDE MODAL

    </script>



</body>
</html>