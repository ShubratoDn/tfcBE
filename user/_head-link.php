    
<?php
    $adRedirect ="../";
?>
    

<!-- FAVICON OF WEBSITE -->
<link rel="shortcut icon" href="../resources/img/logo.png" type="image/x-icon">

<!-- google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Lato&display=swap" rel="stylesheet">   
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

<!-- vendor css -->
<link rel="stylesheet" href="../vendor/css/normalize.css">

<!-- bootstrap  -->
<link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
<link rel="stylesheet" href="../vendor/css/bootstrap-grid.min.css">

<!-- font awesome -->
<link rel="stylesheet" href="../vendor/css/font-awesome.min.css">


<!-- custom css -->
<link rel="stylesheet" href="<?php echo $adRedirect?>resources/css/style.css">
<link rel="stylesheet" href="<?php echo $adRedirect?>resources/css/userfstyle.css">
<link rel="stylesheet" href="<?php echo $adRedirect?>resources/css/responsive.css">


    <!-- ============================ -->
    <!-- DATABASE CONNECTION -->
    <!-- =-=-=-=-=-=-=----=--=-=-=---=- -->
    <?php
        include($adRedirect."database/DBcontroller.php");
    ?>