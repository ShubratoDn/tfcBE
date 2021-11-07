<!-- loader -->
    <div class="loader-div">
        <div class="loader"></div>
    </div>

    <!-- go to top  -->
    <button onclick="topFunction()" class="gotop">
        <i class=" fa fa-angle-double-up"></i>
    </button>
    
    <!-- header starts -->
    <header>
        <!-- NAVBAR -->
        <nav>
            <!-- nav top bar -->
            <div class="nav-top d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <!-- nav-top left -->
                        <div class="col-10 nav-top-left">
                            <a href="tel: +8801759458961" class="nav-top-call text-dark"> <i class="text-red fa fa-phone" ></i> &nbsp; +8801759458961</a> 
                            <a href="mailto: mycomputer44985@gmail.com " class="nav-top-mail ml-sm-5 text-dark"> <i class="text-red fa fa-envelope" ></i> &nbsp; mycomputer44985@gmail.com</a>
                        </div>
                        <!-- nav-top Right -->
                        <div class="col-2 nav-top-right">
                            <div class="d-flex justify-content-around">
                                <a href="#"><i class=" fa fa-facebook"></i></a>
                                <a href="#"><i class=" fa fa-instagram"></i></a>
                                <a href="#"><i class=" fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="navbar">
               <div class="container-fluid">
                    <div class="row w-100">
                        <!-- LOGO -->
                        <div class="col-lg-1 d-flex align-items-center justify-content-center mb-4 mb-sm-0 logo-div">
                              <!-- logo -->
                            <a href="<?php echo $adRedirect?>index.php">
                                <img src="<?php echo $adRedirect?>resources/img/logo.png" alt="TFC" title="Tamai Food Cart" id="logo">
                            </a>  
                        </div>
                        <!-- NAV MENU -->
                        <div class="col-lg-6  nav-menu-col">
                            <!-- nav menus -->
                            <div class="nav-menu">
                                <ul>
                                    <li><a href="<?php echo $adRedirect?>index.php" data-after="Home">Home</a></li>
                                    <li class=" dropdown">
                                        <!-- dropdown menu -->
                                        <a href="#" data-after="Menu" class=" dropdown-btn">Category <i class=" fa fa-angle-down"></i>
                                        </a>
                                        <!-- dropdown items -->
                                        <div class="dropdown-items">
                                            <ul>
                                                <li><a href="#" data-after="Menu">Fast Food</a></li>
                                                <li><a href="#" data-after="Menu">Dupurer Khabar</a></li>
                                                <li><a href="#" data-after="Menu">Breakfast</a></li>
                                                <li><a href="#" data-after="Menu">Dinner</a></li>
                                            </ul>
                                        </div>
                                    </li>                                   
                                    <li><a href="<?php echo $adRedirect?>index.php#our-article" data-after="Articles">Articles</a></li>
                                    <li><a href="<?php echo $adRedirect?>about.php" data-after="About">About</a></li>
                                    <li><a href="<?php echo $adRedirect?>contact.php" data-after="Contact">Contact</a></li>
                                </ul>

                                <button class="nav-exit-btn"><i class=" fa fa-times"></i></button>
                            </div>
                        </div>
                         <!-- NAV Extra -->
                        <div class="col-lg-5 col-md-10 col-9 nav-extra-col">
                            <div class="nav-extra">
                                <!-- nav extra -->
                                <ul>
                                    <li>
                                        <?php 
                                            include($adRedirect."_partial-temp/_search_suggestion.php");
                                        ?>
                                    </li>

                                    <li title="user">
                                        <?php 
                                            if(!isset($_SESSION['user_id'])){
                                                echo '
                                                <button class="preventListener user" onclick="showModal()">
                                                    <i class=" fa fa-user"></i>                                            
                                                </button>';
                                            }else{
                                                // USER NAV
                                                echo'
                                                <div id="user">
                                                    <div class="user-img">
                                                        <img src="'.$adRedirect.'resources/img/user.png" alt="user">
                                                    </div>
                                                    <div class="user-opt">
                                                        <ul>
                                                            <li><a href="#">Profile</a></li>
                                                            <li><a href="'.$adRedirect.'_partial-temp/logout.php">Logout</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                ';
                                            }
                                        ?>

                                    </li>
                                    <li title="cart">
                                        <a href="<?php echo $adRedirect."cart.php"?>" class="cart">
                                            <i class=" fa fa-shopping-basket"></i>
                                            <?php
                                            
                                                if(isset($_SESSION['myCart'])){
                                                    echo " <div class='cart-number'>".count($_SESSION['myCart'])."</div>";
                                                }

                                            ?>
                                        </a>
                                    </li>
                                    <li title="wishlist">
                                        <a href="<?php echo $adRedirect?>" class="wishlist">
                                            <i class=" fa fa-heart"></i>
                                            <div class="wishlist-number">0</div>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                        <!-- hamburger -->
                        <div class="col-1 hamburger">
                            <i class=" fa fa-bars"></i>
                        </div>
                    </div>
               </div>
            </div>
        </nav>

        <!-- LOGIN MODAL -->
        <?php
            include("_login.php");
        ?>
        
    </header>
    <!-- header ends -->