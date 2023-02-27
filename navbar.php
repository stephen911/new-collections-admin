
<div class="navbar-custom topnav-navbar">
                <div class="container-fluid detached-nav">

                    <!-- Topbar Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="#" class="logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/omni.jpeg" alt="logo" height="50">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/omni.jpeg" alt="small logo" height="22">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="#" class="logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/omni.jpeg" alt="dark logo" height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/omni.jpeg" alt="small logo" height="22">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <ul class="list-unstyled topbar-menu float-end mb-0">
                    

                        <li class="notification-list d-none d-sm-inline-block">
                            <a class="nav-link" href="javascript:void(0)" id="light-dark-mode">
                                <i class="ri-moon-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">

                                <span>
                                    <span class="account-user-name"><?php echo $user['first_name'] ; ?></span>
                                    <span class="account-position"><?php echo $user['email'] ; ?></span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
 
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome, <?php echo $user['first_name'] ; ?></h6>
                                </div>



                                
                                <a href="logout.php" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>

                    
                </div>
            </div>
