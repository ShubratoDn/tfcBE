<?php
    session_start();
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
        <div class="page-banner about-banner">
            <h1 class="banner-text">About Us</h1>
        </div>
        <!-- page banner Ends -->


        <?php
            // including feature section
            
            echo "<div class='my-5 py-3'></div>";
            include("_partial-temp/_feature.php");

            echo "<div class='my-5 '></div>";
            include("_partial-temp/_know-more.php");


        
        ?>



        <!--============FEEDBACK SECTION=====================  -->
        
        <div class="container-fluid my-5 py-5">
            <!-- item feedBack -->
            <div id="item-fdback" class="my-5"> 
                <div class="owl-carousel owl-theme">
                    <!-- FEEDBACK -->
                    <div class="item">
                        <div class="feedback">
                            <div class="fd-top">
                                <!-- user image -->
                                <img src="resources/img/user.png" alt="" class="fd-img">
                                <div class="fd-user-info">
                                    <!-- user name -->
                                    <div class="fd-user-name">Shubrato Debnath</div>
                                    <div class="fd-rate-date d-flex align-items-center">
                                        <div class="rating">
                                            <!-- deal rating -->
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star-o"></i>
                                        </div>
                                        <div class="fd-time">10th October, 2021</div>
                                    </div>
                                </div>
                            </div>

                            <!-- feedback text -->
                            <div class="fd-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus quam est quidem, expedita consectetur voluptates nemo, aut odio dignissimos ducimus. Tempora adipisci officiis voluptatem sequi debitis, porro iste perspiciatis atque dignissimos quis eos vero est iusto fugit ad modi deserunt numquam animi aliquam veritatis dolorem quaerat quam quia minima?</p>
                            </div>
                        </div>
                    </div>
                    <!-- FEEDBACK -->
                    <div class="item">
                        <div class="feedback">
                            <div class="fd-top">
                                <!-- user image -->
                                <img src="resources/img/user.png" alt="" class="fd-img">
                                <div class="fd-user-info">
                                    <!-- user name -->
                                    <div class="fd-user-name">Shubrato Debnath</div>
                                    <div class="fd-rate-date d-flex align-items-center">
                                        <div class="rating">
                                            <!-- deal rating -->
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star-o"></i>
                                        </div>
                                        <div class="fd-time">10th October, 2021</div>
                                    </div>
                                </div>
                            </div>

                            <!-- feedback text -->
                            <div class="fd-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus quam est quidem, expedita consectetur voluptates nemo, aut odio dignissimos ducimus. Tempora adipisci officiis voluptatem sequi debitis, porro iste perspiciatis atque dignissimos quis eos vero est iusto fugit ad modi deserunt numquam animi aliquam veritatis dolorem quaerat quam quia minima?</p>
                            </div>
                        </div>
                    </div>
                    <!-- FEEDBACK -->
                    <div class="item">
                        <div class="feedback">
                            <div class="fd-top">
                                <!-- user image -->
                                <img src="resources/img/user.png" alt="" class="fd-img">
                                <div class="fd-user-info">
                                    <!-- user name -->
                                    <div class="fd-user-name">Shubrato Debnath</div>
                                    <div class="fd-rate-date d-flex align-items-center">
                                        <div class="rating">
                                            <!-- deal rating -->
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star-o"></i>
                                        </div>
                                        <div class="fd-time">10th October, 2021</div>
                                    </div>
                                </div>
                            </div>

                            <!-- feedback text -->
                            <div class="fd-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus quam est quidem, expedita consectetur voluptates nemo, aut odio dignissimos ducimus. Tempora adipisci officiis voluptatem sequi debitis, porro iste perspiciatis atque dignissimos quis eos vero est iusto fugit ad modi deserunt numquam animi aliquam veritatis dolorem quaerat quam quia minima?</p>
                            </div>
                        </div>
                    </div>
                    <!-- FEEDBACK -->
                    <div class="item">
                        <div class="feedback">
                            <div class="fd-top">
                                <!-- user image -->
                                <img src="resources/img/user.png" alt="" class="fd-img">
                                <div class="fd-user-info">
                                    <!-- user name -->
                                    <div class="fd-user-name">Shubrato Debnath</div>
                                    <div class="fd-rate-date d-flex align-items-center">
                                        <div class="rating">
                                            <!-- deal rating -->
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star-o"></i>
                                        </div>
                                        <div class="fd-time">10th October, 2021</div>
                                    </div>
                                </div>
                            </div>

                            <!-- feedback text -->
                            <div class="fd-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus quam est quidem, expedita consectetur voluptates nemo, aut odio dignissimos ducimus. Tempora adipisci officiis voluptatem sequi debitis, porro iste perspiciatis atque dignissimos quis eos vero est iusto fugit ad modi deserunt numquam animi aliquam veritatis dolorem quaerat quam quia minima?</p>
                            </div>
                        </div>
                    </div>
                    <!-- FEEDBACK -->
                    <div class="item">
                        <div class="feedback">
                            <div class="fd-top">
                                <!-- user image -->
                                <img src="resources/img/user.png" alt="" class="fd-img">
                                <div class="fd-user-info">
                                    <!-- user name -->
                                    <div class="fd-user-name">Shubrato Debnath</div>
                                    <div class="fd-rate-date d-flex align-items-center">
                                        <div class="rating">
                                            <!-- deal rating -->
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                            <i class=" fa fa-star-o"></i>
                                        </div>
                                        <div class="fd-time">10th October, 2021</div>
                                    </div>
                                </div>
                            </div>

                            <!-- feedback text -->
                            <div class="fd-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus quam est quidem, expedita consectetur voluptates nemo, aut odio dignissimos ducimus. Tempora adipisci officiis voluptatem sequi debitis, porro iste perspiciatis atque dignissimos quis eos vero est iusto fugit ad modi deserunt numquam animi aliquam veritatis dolorem quaerat quam quia minima?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

            // HOME ARTICLE 
            echo "<div class='my-5 '></div>";
            include("_partial-temp/_home-articles.php");

        ?>

        
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