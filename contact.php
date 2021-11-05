<?php
    session_start();
    // if(isset($_SESSION['fname'])){
    //     $fname = $_SESSION['fname'];
    // }else{
    //     ?>
             <script>
    //             location.replace("index.php");
    //         </script>
         <?php
    // }
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



    <!-- main section starts  -->
    <main>
        <!-- page banner starts -->
        <div class="page-banner contact-banner">
            <h1 class="banner-text">Contact Us</h1>
        </div>
        <!-- page banner Ends -->

        <!-- contact card starts -->
        <section id="contact-cards">
            <div class="container-fluid">
                <!-- contact card -->
                <div class="contact-card">
                    <i class=" fa fa-map-marker contact-icon"></i>
                    <h2>Addresss</h2>
                    <p>123 6th eight avenue FL 32904 , 455
                        <br>
                        Sirajganj, Bangladesh
                    </p>
                </div>
                <!-- contact card -->
                <div class="contact-card">
                    <i class=" fa fa-envelope contact-icon"></i>
                    <h2>Email</h2>
                    <p>
                        <a href="mailto:mycomputer44985@gmail.com">mycomputer44985@gmail.com</a>
                        <br>
                        <a href="mailto:mycomputer44985@gmail.com">mycomputer44985@gmail.com</a>
                    </p>
                </div>
                <!-- contact card -->
                <div class="contact-card">
                    <i class=" fa fa-phone contact-icon"></i>
                    <h2>Phone</h2>
                    <p>
                        <a href="tel:0175945861">+880175945961</a>
                        <br>
                        <a href="tel:0175945961">+880175945961</a>
                    </p>
                </div>
            </div>
        </section>
        <!-- contact card Ends -->
     

        <?php

            // INCLUDING CONTACT FORM
            include("_partial-temp/_contact-form.php");

        ?>



        <!-- map -->
        <div id="contact-map" class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10282.99640726409!2d89.68516867781835!3d24.325993546071643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x155b0dae04581868!2sTFC-Tamai%20Food%20Cart!5e0!3m2!1sen!2sbd!4v1634194795464!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- map -->

        
    </main>
    <!-- main section Ends -->


    <!-- Including footer -->    
    <?php
        include($adRedirect."_partial-temp/_footer.php");
    ?>



</body>
</html>