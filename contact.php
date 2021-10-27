<?php
    session_start();
    if(isset($_SESSION['fname'])){
        $fname = $_SESSION['fname'];
    }else{
        ?>
            <script>
                location.replace("index.php");
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

    
    <!-- footer starts -->
    <footer id="footer"> 
        <div class="footer-body">
            <div class="container-fluid py-5">
                <div class="row pt-5">
                    <!-- contact us -->
                    <div class="col-md-3 col-sm-6 col-12 p-3 mb-4 foot-contact">
                        <h1>CONTACT US</h1>
                        <p><i class=" fa fa-map-marker pr-3"></i><b>Headquerter : </b> <a href="#">Belkuchi, Sirajganj</a></p>
                        <p><i class=" fa fa-envelope pr-2"></i><b>Email : </b><a href="mailto: mycomputer44985@gmail.com" >mycomputer44985@gmail.com</a></p>
                        <p><i class=" fa fa-phone pr-3"></i><b>Tel : </b><a href="tel: 01759458961" >01759458961</a></p>
                    </div>
                    <!-- services -->
                    <div class="col-md-3 col-sm-6 col-12 p-3 mb-4">
                        <h1>Customer Services</h1>
                        <p><a href="#">Privacy Policy</a></p>
                        <p><a href="#">Cookie Policy</a></p>
                        <p><a href="#">Purchasing Policy</a></p>
                        <p><a href="#">Terms & Conditions</a></p>
                    </div>
                    <!-- additional links -->
                    <div class="col-md-3 col-sm-6 col-12 p-3 mb-4">
                        <h1>Information</h1>
                        <p><a href="#">About us</a></p>
                        <p><a href="#">Contact us</a></p>
                    </div>
                    <!-- Get In TOuch -->
                    <div class="col-md-3 col-sm-6 col-12 p-3 mb-4">
                        <h1>Get in Touch</h1>
                        <p class="social-links">
                            <a href="#"><i class=" fa fa-facebook"></i></a>
                            <a href="#"><i class=" fa fa-twitter"></i></a>
                            <a href="#"><i class=" fa  fa-instagram"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-end py-4">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center align-items-center">                        
                        &copy; 2021 All Rights Reserved <span class=" text-red"> || </span> Design & Developed by <span class="text-white" style=" cursor:pointer"> &nbsp;Shubrato Debnath</span>                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer Ends -->

        
        


<!-- ================javascript links=================== -->
    <!-- vendor js -->
    <script src="vendor/js/jquery.min.js"></script>
    <script src="vendor/js/popper.min.js"></script>

    <!-- bootstrap js -->
    <script src="vendor/js/bootstrap.min.js"></script>
    
    <script src="vendor/js/html5shiv.min.js"></script>
    <script src="vendor/js/respond.min.js"></script>


    <!-- owl carousel -->
    <script src="vendor/js/owl.carousel.min.js"></script>
    <!-- DATA AOS -->
    <script src="vendor/js/aos.js"></script>

    <!-- custom js -->
    <script src="resources/js/main.js"></script>



</body>
</html>