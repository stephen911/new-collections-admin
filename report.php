<?php
include 'functions.php';
// include 'yolkpay.php';
// $yolk = new YolkPay();

checker();
$user = adminmembers();
//  var_dump($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">


<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:18:05 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Collections | OmniBsic - Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

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
                <!-- <div class="leftbar-user">
                    <a href="#">
                        <img src="assets/images/omni.png" alt="user-image" height="42" class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name"><strong></?php echo ucwords($user['first_name']); ?></strong></span>
                    </a>
                </div> -->

                <!--- Sidemenu -->
                <?php include "sidebar.php" ?>

                <!-- Help Box -->
                <!-- <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-end close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-soft-dark btn-sm">Upgrade</a>
                    </div> -->
                <!-- end Help Box -->

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
                    <!-- end page title -->


                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body noprint">
                                    <h4 class="header-title">Edit Info</h4>
                                    <p class="text-muted font-14">
                                        Edit Your Info
                                    </p>


                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="form-row-preview">
                                            <form action="" novalidate method="get" class="repo" enctype='multipart/form-data'>


                                                <div class="mb-3">

                                                    <input id="email" type="hidden" placeholder="" value="<?php echo  $user['id']; ?>" class="form-control" name="id">
                                                </div>




                                                <div class="mb-3">
                                                    <label for="example-select" class="form-label">Beneficiary's Name</label>
                                                    <select class="form-select" id="example-select" name="bene">


                                                        <//?php getbene_spec() ?>

                                                    </select>
                                                </div>


                                        </div>



                                        <div class="mb-3 text-center">
                                            <button class="btn btn-primary" name="btnupdate" type="submit"> Generate report </button>
                                        </div>

                                        </form>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div> -->

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
                                                <!-- <p class="text-muted font-13">Total Collections</p> -->
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
                                                    <!-- <p class="text-muted font-13">Total Collections</p> -->
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
                                                <!-- <div class="mt-3 float-sm-end">
                                                    <p class="font-13"><strong>Beneficiary Name: </strong> <span class="float-end">&nbsp;&nbsp;&nbsp; <?php echo $_GET['bene']; ?></span></p> -->
                                                <!-- <p class="font-13"><strong>Transaction Status: </strong> <span class="badge bg-primary float-end">Paid</span></p> -->


                                                <!-- <p class="font-13"><strong>Transaction No: </strong> <span class="float-end"><//?php  ReportId(); ?></span></p> -->
                                                <!-- </div> -->
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
                                                    <!-- <p class="text-muted font-13">Total Collections</p> -->
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
                                                <!-- <div class="mt-3 float-sm-end">
                                                    <p class="font-13"><strong>Beneficiary Name: </strong> <span class="float-end">&nbsp;&nbsp;&nbsp; <?php echo $_GET['bene']; ?></span></p> -->
                                                <!-- <p class="font-13"><strong>Transaction Status: </strong> <span class="badge bg-primary float-end">Paid</span></p> -->


                                                <!-- <p class="font-13"><strong>Transaction No: </strong> <span class="float-end"><//?php  ReportId(); ?></span></p> -->
                                                <!-- </div> -->
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
                                                    <!-- <p class="text-muted font-13">Total Collections</p> -->
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
                                                <!-- <div class="mt-3 float-sm-end">
                                                    <p class="font-13"><strong>Beneficiary Name: </strong> <span class="float-end">&nbsp;&nbsp;&nbsp; <?php echo $_GET['bene']; ?></span></p> -->
                                                <!-- <p class="font-13"><strong>Transaction Status: </strong> <span class="badge bg-primary float-end">Paid</span></p> -->


                                                <!-- <p class="font-13"><strong>Transaction No: </strong> <span class="float-end"><//?php  ReportId(); ?></span></p> -->
                                                <!-- </div> -->
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
                                                    <!-- <p class="text-muted font-13">Total Collections</p> -->
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
                                                <!-- <div class="mt-3 float-sm-end">
                                                    <p class="font-13"><strong>Beneficiary Name: </strong> <span class="float-end">&nbsp;&nbsp;&nbsp; <?php echo $_GET['bene']; ?></span></p> -->
                                                <!-- <p class="font-13"><strong>Transaction Status: </strong> <span class="badge bg-primary float-end">Paid</span></p> -->


                                                <!-- <p class="font-13"><strong>Transaction No: </strong> <span class="float-end"><//?php  ReportId(); ?></span></p> -->
                                                <!-- </div> -->
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
                                                <!-- <div class="mt-3 float-sm-end">
                                                    <p class="font-13"><strong>Beneficiary Name: </strong> <span class="float-end">&nbsp;&nbsp;&nbsp; <?php echo $_GET['bene']; ?></span></p> -->
                                                <!-- <p class="font-13"><strong>Transaction Status: </strong> <span class="badge bg-primary float-end">Paid</span></p> -->


                                                <!-- <p class="font-13"><strong>Transaction No: </strong> <span class="float-end"><//?php  ReportId(); ?></span></p> -->
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <!--             
                                        <div class="row mt-6">
                                            <div class="col-sm-6">
                                                <h6>Billing Info</h6>
                                                <address>
                                                    <//?php echo $user['name'] ?><br>
                                                    <//?php echo $user['contact'] ?><br>
                                                    San Franisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890c
                                                </address>
                                            </div>  -->

                                        <!-- <div class="col-sm-4">
                                                <h6>Shipping Address</h6>
                                                <address>
                                                    Cooper Hobson<br>
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div>  -->

                                        <!-- <div class="col-sm-6">
                                                <div class="text-sm-end">
                                                    <img src="assets/images/qr.png" alt="barcode-image" class="img-fluid me-2" />
                                                </div>
                                            </div>  -->
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

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="text-white m-0">Theme Settings</h5>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="card mb-0 p-3">
                    <h5 class="mt-0 font-16 fw-bold mb-3">Choose Layout</h5>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-flex p-1 align-items-center border-bottom">
                                            <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                            <span class="d-block border border-3 ms-auto"></span>
                                            <span class="d-block border border-3 ms-1"></span>
                                            <span class="d-block border border-3 ms-1"></span>
                                            <span class="d-block border border-3 ms-1"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Horizontal</h5>
                        </div>
                    </div>

                    <h5 class="my-3 font-16 fw-bold">Color Scheme</h5>

                    <div class="colorscheme-cardradio">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-theme" id="layout-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-color-light">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-theme" id="layout-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100 bg-black" for="layout-color-dark">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-lighten d-flex h-100 flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-lighten d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h5 class="my-3 font-16 fw-bold">Layout Mode</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-fluid">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                            </div>
                            <div class="col-4" id="layout-boxed">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-mode-boxed">
                                        <span class="d-flex h-100 border-start border-end">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column p-1">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                            </div>

                            <div class="col-4" id="layout-detached">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="data-layout-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-md w-100" for="data-layout-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 align-items-center border-bottom">
                                                <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                <span class="d-block border border-3 ms-auto"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                            </span>
                                            <span class="d-flex h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>

                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>

                    <h5 class="my-3 font-16 fw-bold">Topbar Color</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-dark d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>

                    <div id="sidebar-color">
                        <h5 class="my-3 font-16 fw-bold">Sidebar Color</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-color" id="leftbar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-light">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-color" id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-dark">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-dark d-flex h-100 flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-color" id="leftbar-color-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-default">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-primary bg-gradient d-flex h-100 flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Brand</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h5 class="my-3 font-16 fw-bold">Sidebar Size</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-default">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-compact" value="compact">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-compact">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column">
                                                    <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small-hover">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column">
                                                    <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Hover View</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-full">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="d-flex h-100 border-end  flex-column">
                                                    <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h5 class="my-3 font-16 fw-bold">Layout Position</h5>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>

                    <div id="sidebar-user">
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <label class="font-16 fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" name="sidebar-user" id="sidebaruser-check">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary w-100">Buy Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/chart.js/chart.min.js"></script>

    <!-- Profile Demo App js -->
    <script src="assets/js/pages/demo.profile.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:18:07 GMT -->

</html>