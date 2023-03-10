<?php
include 'functions.php';
checker();
$user = adminmembers();

?>
<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">




<head>
    <meta charset="utf-8" />
    <title>Collections | OmniBsic - Report</title>
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
<style type="text/css" media="print">
    @page {
        size: auto;
        /* auto is the initial value */
        margin: 0.1;
        /* this affects the margin in the printer settings */
    }
</style>

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
                    <img src="assets/images/logo.png" alt="logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo.png" alt="small logo" height="22">
                </span>
            </a>

            <!-- Logo Dark -->
            <a href="dashboard.php" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="dark logo" height="22">
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
                <!-- Leftbar User -->
               

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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">OmniBSIC</a></li>
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Report</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Report</h4>
                            </div>
                        </div>
                    </div>
                  

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <!-- Report Logo-->
                                    <div class="clearfix">
                                        <div class="float-start mb-3">
                                            <img src="assets/images/omni_trans.png" alt="dark logo" height="42">
                                        </div>
                                        <div class="float-end">
                                            <h4 class="m-0 d-print-none">Report</h4>
                                        </div>
                                    </div>

                                    <!-- Report Detail-->
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="float-start">
                                                <p><b>Generated by: <?php echo ucwords($user['first_name']); ?></b></p>
                                                
                                            </div>
                                            <div class="float-end">
                                                <p><b>Beneficiary Name: &nbsp;<?php
                                                                                if (isset($_GET['btnupdate'])) {
                                                                                    echo  ucwords(name_spec($_GET['bene']));
                                                                                } else {
                                                                                    echo  'None';
                                                                                }

                                                                               
                                                                                ?></b></p>

                                            </div>



                                        </div><!-- end col -->
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="float-start">
                                                    <p><b><?php
                                                            if (isset($_GET['btnupdate'])) {
                                                                echo usd_spec($_GET['bene']).'&nbsp; <span class="badge bg-primary float-end">No.' . usd_spec_num($_GET['bene']).'   </span>';
                                                            } else {
                                                                echo 'USD 0';
                                                            }


                                                            ?></b></p>
                                               
                                                </div>
                                                <div class="float-end">
                                                    <p><b>Cash: &nbsp; <?php
                                                                        if (isset($_GET['btnupdate'])) {
                                                                            echo cash_spec($_GET['bene']) .'&nbsp; <span class="badge bg-primary float-end">No.' . cash_spec_num($_GET['bene']).'   </span>';
                                                                        } else {
                                                                            echo  'GHS 0';
                                                                        }
                                                                        ?></b></p>

                                                                        

                                                </div>



                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="float-start">
                                                    <p><b><?php
                                                            if (isset($_GET['btnupdate'])) {
                                                                echo gbp_spec($_GET['bene']).'&nbsp; <span class="badge bg-primary float-end">No.' . gbp_spec_num($_GET['bene']).'   </span>';
                                                            } else {
                                                                echo 'GBP 0';
                                                            }


                                                            ?></b></p>
                                                   
                                                </div>
                                                <div class="float-end">
                                                    <p><b>Momo: &nbsp; <?php
                                                                        if (isset($_GET['btnupdate'])) {
                                                                            echo momo_spec($_GET['bene']) .'&nbsp; <span class="badge bg-primary float-end">No.' . momo_spec_num($_GET['bene']).'   </span>';
                                                                        } else {
                                                                            echo  'GHS 0';
                                                                        }
                                                                        ?></b></p>

                                                </div>



                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="float-start">
                                                    <p><b><?php
                                                            if (isset($_GET['btnupdate'])) {
                                                                echo eur_spec($_GET['bene']).'&nbsp; <span class="badge bg-primary float-end">No.' . eur_spec_num($_GET['bene']).'   </span>';
                                                            } else {
                                                                echo 'EUR 0';
                                                            }


                                                            ?></b></p>
                                                    
                                                </div>
                                                <div class="float-end">
                                                    <p><b>Credit Card: &nbsp; <?php
                                                                                if (isset($_GET['btnupdate'])) {
                                                                                    echo visa_spec($_GET['bene']) .'&nbsp; <span class="badge bg-primary float-end">No.' . visa_spec_num($_GET['bene']).'   </span>';
                                                                                } else {
                                                                                    echo  'GHS 0';
                                                                                }
                                                                                ?></b></p>

                                                </div>



                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                               
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="float-start">
                                                    <p><b><?php
                                                            if (isset($_GET['btnupdate'])) {
                                                                echo cfa_spec($_GET['bene']).'&nbsp; <span class="badge bg-primary float-end">No.' . cfa_spec_num($_GET['bene']).'   </span>';
                                                            } else {
                                                                echo 'CFA 0';
                                                            }


                                                            ?></b></p>
                                                  
                                                </div>
                                                <div class="float-end">
                                                    <p><b>Cheque: &nbsp; <?php
                                                                            if (isset($_GET['btnupdate'])) {
                                                                                echo cheque_spec($_GET['bene']) .'&nbsp; <span class="badge bg-primary float-end">No.' . cheque_spec_num($_GET['bene']).'   </span>';
                                                                            } else {
                                                                                echo  'GHS 0';
                                                                            }
                                                                            ?></b></p>

                                                </div>



                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">


                                                <div class="float-end">
                                                    <p><b>Gifts: &nbsp; <?php
                                                                        if (isset($_GET['btnupdate'])) {
                                                                            echo gifts_spec($_GET['bene']);
                                                                        } else {
                                                                            echo  'GHS 0';
                                                                        }
                                                                        ?></b></p>

                                                </div>



                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                               
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <!-- end row -->

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table mt-4">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Currency</th>
                                                            <th>Amount</th>
                                                            <th>Payment Method</th>
                                                            <!-- <th class="text-end">Total</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <?php



                                                        if (isset($_GET['btnupdate'])) {
                                                            echo transactions($_GET['bene']);
                                                        } else {
                                                            echo  '<marquee><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Please Select a Beneficiary from a section below this page to generate report</h4></marquee>';
                                                        }





                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div> <!-- end table-responsive-->
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="clearfix pt-3">
                                                <h6 class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us:</h6>
                                                <small>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +233 244 564 5644
                                                </small>
                                                
                                            
                                        </div> <!-- end col -->

                                        <div class="col-sm-12">
                                            <div class="clearfix pt-3">
                                                
                                                <h6 class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:</h6>
                                                <small>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('jS F, Y'); ?>
                                                </small>
                                            </div>
                                            
                                        </div> <!-- end col -->
                                        <div class="col-sm-12">
                                            <div class="float-end mt-3 mt-sm-0">
                                                <p><b>Sub-total: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b> <span class="float-end"><?php  ?></span></p>
                                                <!-- <p><b>VAT (12.5):</b> <span class="float-end">$515.00</span></p> -->
                                                <h3><?php


                                                    if (isset($_GET['btnupdate'])) {
                                                        echo 'Gh₵ ' . transactionstotal($_GET['bene'] . '  ');
                                                    } else {
                                                        echo  'Gh₵ 0';
                                                    }

                                                    ?></h3>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row-->

                                    <div class="d-print-none mt-4">
                                        <div class="text-end">
                                            <a href="javascript:window.print()" class="btn btn-primary"><i class="mdi mdi-printer"></i> Print</a>
                                            <!-- <a href="javascript: void(0);" class="btn btn-info">Submit</a> -->
                                        </div>
                                    </div>
                                    <!-- end buttons -->

                                </div> <!-- end card-body-->
                            </div> <!-- end card -->
                        </div> <!-- end col-->
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body noprint">
                                    <h4 class="header-title">Select Beneficiary</h4>
                                    <p class="text-muted font-14">
                                        To Generate the Report
                                    </p>


                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="form-row-preview">
                                            <form action="" novalidate method="get" class="repo" enctype='multipart/form-data'>


                                                <div class="mb-3">
                                                    <!-- <label for="emailaddress" class="form-label">Name</label>
                                                    <input class="form-control" type="text" id="name" required placeholder="Enter Staff's Name" name="name" > -->
                                                    <input id="email" type="hidden" placeholder="" value="<?php echo  $user['id']; ?>" class="form-control" name="id">
                                                </div>


                                                <!-- <div class="mb-3">
                                                    <label for="emailaddress" class="form-label">Phone Number</label>
                                                    <input class="form-control" type="text" id="name" required placeholder="Enter Staff's Phone Number" name="contact" >
                                                </div> -->

                                                <div class="mb-3">
                                                    <label for="example-select" class="form-label">Beneficiary's Name</label>
                                                    <select class="form-select" id="example-select" name="bene">


                                                        <?php getbene_spec() ?>

                                                    </select>
                                                </div>


                                                <!-- <div class="mb-3">
                                                    <label for="emailaddress" class="form-label">Pin</label>
                                                    <input class="form-control" type="text" id="pin" required placeholder="Enter Staff's Pin" name="pin" >
                                                </div> -->




                                        </div>










                                        <div class="mb-3 text-center">
                                            <button class="btn btn-primary" name="btnupdate" type="submit"> Generate report </button>
                                        </div>

                                        </form>
                                    </div> <!-- end preview-->

                                    <!-- end preview code-->
                                </div> <!-- end tab-content-->

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

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

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>


</html>