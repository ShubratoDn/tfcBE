<?php
    session_start();

    //removing password cookie
    // setcookie("user_password","", time()- 1000);

    session_destroy();
    ?>
        <script>
            location.replace("../index.php");
        </script>
    <?php
?>
