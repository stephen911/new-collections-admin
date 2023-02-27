<?php
include 'functions.php';
header("Refresh:5");

checker();
$user = adminmembers();

?>
<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">




<head>
    <meta charset="utf-8" />
    <title>Dashboard | OMNIBSIC - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Collections Admin Panel" name="description" />
    <meta content="Stephen Dapaah" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/bsic.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

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
            <a href="index-2.php" class="logo logo-light">
                <span class="logo-lg">
                    <img src="assets/images/omni.jpeg" alt="logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="small logo" height="22">
                </span>
            </a>

            <!-- Logo Dark -->
            <a href="index-2.php" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-dark-sm.png" alt="small logo" height="22">
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">OMNIBSIC</a></li>
                                       
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Profile -->
                            <div class="card bg-primary">
                                <div class="card-body profile-user-box">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                  
                                                </div>
                                                <div class="col">
                                                    <div>
                                                        <h4 class="mt-1 mb-1 text-white"><?php echo $user['first_name']; ?></h4>
                                                        <p class="font-13 text-white-50"> <?php echo $user['email']; ?></p>

                                                        <ul class="mb-0 list-inline text-light">
                                                            <li class="list-inline-item me-3">
                                                                <h5 class="mb-1 text-white"><?php echo totalstatus(); ?></h5>
                                                                <p class="mb-0 font-13 text-white-50">Number of Donors</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <h5 class="mb-1 text-white"><?php echo countmembers() ?></h5>
                                                                <p class="mb-0 font-13 text-white-50">Total Amount</p>
                                                            </li>
                                                          
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col-->

                                        <div class="col-sm-4">
                                        
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body/ profile-user-box-->
                                </div>
                                <!--end profile/ card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">USD</h6>
                                        <h2 class="m-b-20"><?php echo usd() ?></h2>
                                       
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">GBP</h6>
                                        <h2 class="m-b-20"><?php echo gbp() ?></h2>
                                       
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">EUR</h6>
                                        <h2 class="m-b-20"><?php echo eur() ?></h2>
                                       
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->
                            </div><!-- end col -->
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">CFA</h6>
                                        <h2 class="m-b-20"><?php echo cfa() ?></h2>

                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">Tellers</h6>
                                        <h2 class="m-b-20"><?php echo totalstaff() ?></h2>
                                       
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">Beneficiaries</h6>
                                        <h2 class="m-b-20"><?php echo totalbene() ?></h2>
                                       
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->
                            </div><!-- end col -->
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="header-title">Statistics</h4>

                            </div>

                            <?php echo showdonors(); ?>

                        </div>
                    </div>

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

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>


</html>