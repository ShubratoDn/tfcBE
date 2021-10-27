
          <!-- ============================== -->
                      <!-- SIDENAVBAR  -->
          <!-- ============================== -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <ul class="nav">

              <!-- nav profile -->
              <li class="nav-item nav-profile">
                  <a href="#" class="nav-link">
                  <div class="nav-profile-image">
                      <img src="assets/images/faces/face1.jpg" alt="profile">
                      <span class="login-status online"></span>
                      <!--change to offline or busy as needed-->
                  </div>
                  <div class="nav-profile-text d-flex flex-column">
                      <span class="font-weight-bold mb-2"><?php echo $_SESSION["admin_name"]?></span>
                      <span class="text-secondary text-small"><?php echo $_SESSION["admin_post"]?></span>
                  </div>
                  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                  </a>
              </li>

              <!-- SIDE NAV LINK -->
              <li class="nav-item">
                  <a class="nav-link" href="index.php">
                  <span class="menu-title">Dashboard</span>
                  <i class="mdi mdi-home menu-icon"></i>
                  </a>
              </li>

              <!-- DROPDOWN SIDE BAR -->
              <!-- <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">Basic UI Elements</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                  </a>
                  <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                  </ul>
                  </div>
              </li> -->

              <li class="nav-item">
                  <a class="nav-link" href="insert_category.php">
                  <span class="menu-title">Insert Category</span>
                  <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="insert_item.php">
                  <span class="menu-title">Insert Food Item</span>
                  <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                  </a>
              </li>
              </ul>
          </nav>
          <!-- ============================== -->
                  <!-- SIDENAVBAR ENDS  -->
          <!-- ============================== -->