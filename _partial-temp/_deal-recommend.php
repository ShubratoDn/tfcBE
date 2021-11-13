


        <!-- deal / recommendation  -->
        <section id="deal-recommend">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-md-5">
                        <!-- DEAL FOR TODAY SECTION -->
                        <?php
                            include("_deal-today.php");
                        ?>
                        <!-- DEAL FOR TODAY SECTION ENDS -->
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <!-- recommend for you -->
                        <?php
                            include("_recommend-item.php");
                        ?>

                        <!-- ad section starts  -->
                        <section id="ad">
                            <div class="row">
                                <!-- ad 1  -->
                                <div class="col-12 col-lg-6">
                                    <a href="https://google.com">
                                        <div class="ad">
                                            <img src="resources/img/ad1.png" alt="ad" class="ad-img">
                                        </div>
                                    </a>                                      
                                </div>
                                <!-- ad 2  -->
                                <div class="col-12 col-lg-6">
                                    <a href="https://google.com">
                                        <div class="ad">
                                            <img src="resources/img/ad2.png" alt="ad" class="ad-img">
                                        </div>
                                    </a>                                      
                                </div>
                            </div>
                        </section>
                        <!-- ad section Ends -->
                    </div>

                </div> 
            </div>
        </section>
