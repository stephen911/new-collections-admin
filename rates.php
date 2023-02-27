<?php
include 'functions.php';

checker();
$user = adminmembers();

?>


<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">




<head>
    <meta charset="utf-8" />
    <title>Collections | OMNIBSIC - Rates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Collections Admin Panel" name="description" />
    <meta content="Stephen Dapaah" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/bsic.ico">

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
                                        <li class="breadcrumb-item active">Add Rates</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Rates</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->



                    <!-- Form row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Rates</h4>
                                    <p class="text-muted font-14">
                                        Add Rates
                                    </p>


                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="form-row-preview">
                                            <form action="" novalidate method="get" class="rate" enctype='multipart/form-data'>
                                               

                                                <div class="mb-3">
                                                    <label for="emailaddress" class="form-label">USD</label>
                                                    <input class="form-control" type="text" id="name" required placeholder="United States Dollars" name="usd" >
                                                    <input id="email" type="hidden" placeholder="" value="<?php echo  $user['id']; ?>" class="form-control" name="id">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="emailaddress" class="form-label">GBP</label>
                                                    <input class="form-control" type="text" id="name" required placeholder="Great British Pounds" name="gbp" >
                                                </div>

                                                <div class="mb-3">
                                                    <label for="emailaddress" class="form-label">EUR</label>
                                                    <input class="form-control" type="text" id="name" required placeholder="Euro" name="eur" >
                                                </div>
                                                <div class="mb-3">
                                                    <label for="emailaddress" class="form-label">CFA</label>
                                                    <input class="form-control" type="text" id="name" required placeholder="CFA" name="cfa" >
                                                </div>  
                                        </div>
                                        <div class="mb-3 text-center">
                                            <button class="btn btn-primary" type="submit"> Add Rate </button>
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
    <script src="processor.php"></script>


</body>


</html>