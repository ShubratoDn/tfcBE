
<!-- DATABASE CONNECTION -->
<?php

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $DB = "tfc";

    $con = mysqli_connect($host, $dbuser, $dbpass, $DB);

    if(mysqli_connect_error()){
        echo " <div class=' text-red'>CONNECTION ERROR problem is : ".mysqli_connect_error()."</div>" ;
    }else{        
        // echo " <h1>CONNECTION SUCCESSFULL</h1>";
    }

?>