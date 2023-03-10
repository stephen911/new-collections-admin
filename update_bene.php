<?php
include 'functions.php';

checker();
$user = adminmembers();
$user1 = userbene();
?>


<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">




<head>
    <meta charset="utf-8" />
    <title>Profile | OMNIBSIC - Update Teller</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Collections Admin Panel" name="description" />
    <meta content="Stephen Dapaah" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon2.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- sweetalert -->
    <link type="text/css" href="assets/css/sweetalert2.min.css" rel="stylesheet">

    <!-- App css -->
    <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <?php include "navbar.php" ?>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Logo Light -->
            <a href="dashboard.php" class="logo logo-light">
                <span class="logo-lg">
                    <img src="assets/images/omni.jpeg" alt="logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/omni.jpeg" alt="small logo" height="22">
                </span>
            </a>

            <!-- Logo Dark -->
            <a href="dashboard.php" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/omni.jpeg" alt="dark logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/omni.jpeg" alt="small logo" height="22">
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button type="button" class="bg-transparent button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </button>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user">
                    <a href="#">
                        <img src="assets/images/omni.jpeg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name"><strong><?php echo $user['first_name']; ?></strong></span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <?php include "sidebar.php" ?>

          

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">OMNIBSIC</a></li>
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Edit Info</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Info</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->



                    <!-- Form row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Edit Info</h4>
                                    <p class="text-muted font-14">
                                        Edit Your Info
                                    </p>

                                  
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="form-row-preview">
                                            <form action="" novalidate method="get" class="updatebene" enctype='multipart/form-data'>
                                                

                                                <div class="mb-3">
                                                    <label for="emailaddress" class="form-label">Name</label>
                                                    <input class="form-control" type="text" id="name" required placeholder="Enter Name" name="name" value="<?php echo ($user1['name'] == '') ? '' : $user1['name']; ?>">
                                                    <input id="email" type="hidden" placeholder="Name to be shown on Certificate" value="<?php echo  $user1['id']; ?>" class="form-control" name="id">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>

                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number" name="contact"  value="<?php echo ($user1['contact'] == '') ? '' : $user1['contact']; ?>">
                                                   
                                                </div>

                                                <h4 class="page-title">Event Details</h4>
                                                <hr>

                                    

                                                <div class="mb-3">
                                                    <label for="example-date" class="form-label">Event Date</label>
                                                    <input class="form-control"  id="example-date" type="date" name="tdate">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-fileinput" class="form-label">Event Flyer (Image)</label>
                                                    <input type="file" id="example-fileinput" class="form-control" id="image" name="image">
                                                </div>

                                               
                                                </div>

                                               

                                                <div class="mb-3 text-center">
                                                    <button class="btn btn-primary" type="submit"> Update </button>
                                                </div>

                                            </form>
                                        </div> <!-- end preview-->

                                        <!-- end preview code-->
                                    </div> <!-- end tab-content-->

                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include "footer.php" ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/chart.js/chart.min.js"></script>

    <!-- Profile Demo App js -->
    <script src="assets/js/pages/demo.profile.js"></script>

    <script src="assets/js/sweetalert2.all.min.js"></script>
    <!-- <script src="assets/js/regions.js"></script>

    <script src="assets/js/view.js"></script> -->

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
    <script src="processor.js"></script>


</body>


</html>