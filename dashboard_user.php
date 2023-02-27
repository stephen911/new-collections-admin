<?php
include 'functions.php';
header("Refresh:10");

checker();
$user = adminmembers();

?>
<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light"
    data-sidenav-user="true">




<head>
    <meta charset="utf-8" />
    <title>Collections | OMNIBSIC - Specfic Benificiary</title>
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
            <button type="button" class="bg-transparent button-sm-hover p-0" data-bs-toggle="tooltip"
                data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </button>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>

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
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dash</a></li> -->
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Specific Beneficiary Dashboard</h4>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Specific Beneficiary Dashboard</h4>
                                    <p class="text-muted font-14">
                                        Specific Beneficiary Dashboard
                                    </p>


                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="form-row-preview">
                                            <form action="" novalidate method="get" class="spec"
                                                enctype='multipart/form-data'>


                                                <div class="mb-3">

                                                    <input id="email" type="hidden" placeholder=""
                                                        value="<?php echo $user['id']; ?>" class="form-control"
                                                        name="id">


                                                    <div class="mb-3">
                                                        <label for="example-select" class="form-label">Beneficiary's
                                                            Name</label>
                                                        <select class="form-select" id="example-select" name="bene">


                                                            <?php getbene_spec() ?>

                                                        </select>
                                                    </div>



                                                </div>

                                                <div class="mb-3 text-center">
                                                    <button class="btn btn-primary" name="btnupdate" type="submit">
                                                        Display </button>
                                                </div>

                                            </form>
                                        </div> <!-- end preview-->

                                        <!-- end preview code-->
                                    </div> <!-- end tab-content-->

                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
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
                                                        <h4 class="mt-1 mb-1 text-white">
                                                            <?php

                                                            if (isset($_GET['btnupdate'])) {
                                                                echo ucwords(name_spec($_GET['bene']));
                                                            } else {
                                                                echo $user['first_name'];
                                                            }

                                                            ?>
                                                        </h4>


                                                        <ul class="mb-0 list-inline text-light">
                                                            <?php
                                                            ?>
                                                        </ul>
                                                        <ul class="mb-0 list-inline text-light">
                                                            <li class="list-inline-item me-3">
                                                                <h5 class="mb-1 text-white">
                                                                    <?php
                                                                    if (isset($_GET['btnupdate'])) {
                                                                        echo totalstatus_spec($_GET['bene']);
                                                                        echo ' <p class="mb-0 font-13 text-white-50">Number of Donors</p>';
                                                                    } else {

                                                                        echo '<h5 class="mb-1 text-white">0</h5>';
                                                                        echo ' <p class="mb-0 font-13 text-white-50">Number of Donors</p>';
                                                                    }
                                                                    ?>
                                                                </h5>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <h5 class="mb-1 text-white">
                                                                    <?php
                                                                    if (isset($_GET['btnupdate'])) {
                                                                        echo countmembers_spec($_GET['bene']);
                                                                        echo ' <p class="mb-0 font-13 text-white-50">Total Amount</p>';
                                                                    } else {

                                                                        echo '<h5 class="mb-1 text-white">GHS 0</h5>';
                                                                        echo ' <p class="mb-0 font-13 text-white-50">Total Amount</p>';
                                                                    }
                                                                    ?>
                                                                </h5>
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
                                        <h2 class="m-b-20">
                                            <?php
                                            if (isset($_GET['btnupdate'])) {
                                                echo usd_spec($_GET['bene']);
                                            } else {
                                                echo 'USD 0';
                                            }
                                            ?>
                                        </h2>
                                
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">GBP</h6>
                                        <h2 class="m-b-20">
                                            <?php

                                            if (isset($_GET['btnupdate'])) {
                                                echo gbp_spec($_GET['bene']);
                                            } else {
                                                echo 'GBP 0';
                                            }
                                            ?>
                                        </h2>
                                        
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">EUR</h6>
                                        <h2 class="m-b-20">
                                            <?php
                                            if (isset($_GET['btnupdate'])) {
                                                echo eur_spec($_GET['bene']);
                                            } else {
                                                echo 'EUR 0';
                                            }
                                            ?>
                                        </h2>
                                      
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
                                        <h2 class="m-b-20">
                                            <?php
                                            if (isset($_GET['btnupdate'])) {
                                                echo cfa_spec($_GET['bene']);
                                            } else {
                                                echo 'CFA 0';
                                            }


                                            ?>
                                        </h2>
                                       
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">Teller</h6>
                                        <h2 class="m-b-20">
                                            <?php echo totalstaff() ?>
                                        </h2>
                                       
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">Beneficiary's Name</h6>
                                        <h2 class="m-b-20">
                                            <?php

                                            if (isset($_GET['btnupdate'])) {
                                                echo ucwords(name_spec($_GET['bene']));
                                            } else {

                                                echo "None";
                                            }

                                            ?>
                                        </h2>
                                        
                                    </div> <!-- end card-body-->
                                </div>
                                <!--end card-->
                            </div><!-- end col -->




                        </div>





                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="header-title">Statistics</h4>

                            </div>

                            <?php
                            if (isset($_GET['btnupdate'])) {
                                echo showdonors_spec($_GET['bene']);
                            } else {

                                echo '<div class="border border-light p-3 rounded mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="font-18 mb-1"> Select Beneficiary to Display Results</p>
                                        
                                    </div>
                                    

                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-sucsess rounded-circle h3 my-0">
                                            <i class="mdi mdi-account-multiple"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>';
                            }


                            ?>

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

    <!-- Theme Settings -->


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