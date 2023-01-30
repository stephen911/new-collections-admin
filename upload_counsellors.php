<?php
include 'functions.php';
include 'yolkpay.php';
$yolk = new YolkPay();
checker();
$user = members();
//  var_dump($_SESSION['id']);

// if (isset($_POST['btnupdate'])) {
//     extract($_POST);
//     updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard);
// }

// // Yolk mailer
// $mail = new Mail();
?>

<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">


<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:18:05 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Upload Users | OMNIBSIC - Upload Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

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
                        <span class="leftbar-user-name"><strong><?php echo $user['name']; ?></strong></span>
                    </a>
                </div>

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
                                        <li class="breadcrumb-item"><a href="#">OMNIBSIC</a></li>
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Upload Users</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Upload Users</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->



                    <!-- Form row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Upload Users </h4>
                                    <p class="text-muted font-14">
                                        Select csv file </p>

                                    <!-- activate district cert -->


                                    <!-- <form action="" method="POST" class="settdate"> -->
                                    <!-- <div class="card"> -->



                                    <div class="container">
                                        <form action="upload_user.php" method="post" enctype="multipart/form-data">
                                            <div class="input-group">
                                                <div class="mb-3">
                                                    <input type="file" accept=".csv, .xlsx" class="form-control" id="customFileInput" onchange="javascript:updateList()" value="Select File" aria-describedby="customFileInput" name="file" multiple>
                                                    <!-- <label for="example-fileinput" class="form-label">Select your csv file</label> -->
                                                </div>
                                                <!-- <div id="fileList"></div> -->
                                                <div class="input-group-append">
                                                    <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </form>
                                    </div>



                                    <!-- </div> -->


                                    <!-- <div class="page-nav__content">
                                    <button type="submit" name="btnupdate" class="btn btn-success">upload Users</button>
                                </div> -->



                                    <!-- </form> -->

                                    <!-- <form action="" method="post">

                            <div class="page-nav__content"  style="display: inline;">
                                    <button type="submit" name="btnupdate" class="btn btn-success">Confirm Participation</button>
                                </div>
                            </form> -->

                                    <!-- <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">credit_card</i>
                                        </div>
                                        <div class="media-body"
                                             style="min-width: 180px">
                                             <small>Please we humbly entreat you to make payment right away to book your seat. Please call +233 246 535 961 when you have successfully made payment. Thank you</small>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> -->


                                    <div class="card">
                                        <div class="list-group list-group-fit">
                                            <div class="col-sm-9">
                                                <div role="group" class="input-group input-group-merge form-control-prepended">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div id="page-nav" class="col-lg-auto page-nav">
                                    <div data-perfect-scrollbar>
                                        <div class="page-section pt-lg-32pt">
                                            <ul class="nav page-nav__menu">
                                                <!-- <li class="nav-item">
                                            <a href="#" class="nav-link active">Upload Users </a>
                                        </li> -->

                                                <!-- activate certification -->
                                                <!-- <li class="nav-item">
                                            <a href="certification.php" class="nav-link">Certification</a>
                                        </li> -->
                                                <!-- <li class="nav-item">
                                                    <a href="student-account-edit-profile.html"
                                                       class="nav-link">Profile &amp; Privacy</a>
                                                </li> -->
                                            </ul>
                                            <!-- <div class="page-nav__content">
                                                <button class="btn btn-success">Submit</button>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php include "footer.php" ?>
                        </div>

                    </div>



                    <!-- App Settings FAB -->


                </div>
            </div>

            <!-- jQuery -->
            <script src="assets/vendor/jquery.min.js"></script>
            <script>
                function setfilename(val) {
                    var fileName = val.substr(val.lastIndexOf("\\") + 1, val.length);
                    document.getElementById("customFileInput").value = fileName;
                }
            </script>

            <script>
                updateList = function() {
                    var input = document.getElementById('customFileInput');
                    var output = document.getElementById('fileList');

                    output.innerHTML = '<ul>';
                    for (var i = 0; i < input.files.length; ++i) {
                        output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
                    }
                    output.innerHTML += '</ul>';
                }
            </script>


            <!-- Bootstrap -->
            <script src="assets/vendor/popper.min.js"></script>
            <script src="assets/vendor/bootstrap.min.js"></script>


            <!-- Perfect Scrollbar -->
            <script src="assets/vendor/perfect-scrollbar.min.js"></script>

            <!-- MDK -->
            <script src="assets/vendor/dom-factory.js"></script>
            <script src="assets/vendor/material-design-kit.js"></script>

            <!-- App JS -->
            <script src="assets/js/app.js"></script>
            <script src="assets/js/sweetalert2.all.min.js"></script>
            <script src="assets/js/regions.js"></script>

            <!-- <script src="assets/js/view.js"></script> -->

            <!-- Highlight.js -->
            <script src="assets/js/hljs.js"></script>

            <!-- App Settings (safe to remove) -->
            <script src="assets/js/app-settings.js"></script>




            <script src="processor.js"></script>

</body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->

</html>