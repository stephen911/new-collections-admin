<?php
include 'functions.php';
checker();
$user = adminmembers();
$user1 = userrate();

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

    <!-- App css -->
    <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />



    <!-- Datatables css -->
    <link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />


    <!-- sweetalert -->
    <link type="text/css" href="assets/css/sweetalert2.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "searching": true,
                "paging": true,
                "order": [
                    [0, "asc"]
                ],
                "ordering": true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],


                "columnDefa": [{
                    "targeta": [3], //column index/
                    "orderable": false
                }],
            });
        });
    </script>


    <link href="assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
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
                    <img src="assets/images/omni.jpeg" alt="small logo" height="22">
                </span>
            </a>

            <!-- Logo Dark -->
            <a href="index-2.php" class="logo logo-dark">
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
                                        <li class="breadcrumb-item active">Rates</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Rates</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


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
                                                                <p class="mb-0 font-13 text-white-50">Total Number</p>
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
                                          
                                        </div> <!-- end col-->
                                    </div> <!-- end row -->

                                </div> <!-- end card-body/ profile-user-box-->
                            </div><!--end profile/ card -->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

         



                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Rates Table</h4>
                                    <p class="text-muted font-14">
                                        Admin Table
                                    </p>

                        
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="buttons-table-preview">
                                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                                <thead>
                                                    <?php

                                                    echo '<tr>
                            <th>ID</th>
                            <th>USD</th>
                            <th>GBP</th>
                            
                            <th>EUR</th>
                            <th>CFA</th>
                           
                            
                            <th>Edit</th>
                         
                        </tr>
                    </thead>
                    <tbody>';
                                                    echo rates();
                                                    echo '
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>ID</th>
                        
                        <th>USD</th>
                        <th>GBP</th>
                        <th>EUR</th>
                        <th>CFA</th>
                        
                            <th>Edit</th>
                           
                            
                        </tr>';



                                                    ?>

                                                    </tfoot>
                                            </table>
                                        </div> <!-- end preview-->

                                        <!-- end preview code-->
                                    </div> <!-- end tab-content-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>



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

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Code Highlight js -->
        <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
        <script src="assets/js/hyper-syntax.js"></script>

        <!-- Datatables js -->
        <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
        <script src="assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
        <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

        <!-- Datatable Demo Aapp js -->
        <script src="assets/js/pages/demo.datatable-init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        <script src="assets/js/sweetalert2.all.min.js"></script>

        <script src="processor.js"></script>

</body>


</html>