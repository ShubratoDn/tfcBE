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

    
    
        <!-- INCLUDING FOOTER AND JS LINKS -->
    <?php
        include("_partial-temp/_footer.php");
    ?>



</body>
</html>