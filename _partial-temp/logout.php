<?php
    session_start();

    //removing password cookie
    if(isset($_COOKIE['user_password'])){
        setcookie("user_password", "" , time()-3600);
    }

    session_destroy();
    ?>
        <script>
            location.replace("../index.php");
        </script>
    <?php
?>
