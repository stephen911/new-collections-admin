<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">


<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-register.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:19:09 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Register | OMNIBSIC -  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- sweetalert -->
    <link type="text/css" href="assets/css/sweetalert2.min.css" rel="stylesheet">

    <!-- App css -->
    <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
</head>

<body class="authentication-bg">

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">
                        <!-- Logo-->
                        <div class="card-header pt-4 pb-4 text-center bg-primary">
                            <a href="index-2.php">
                                <span><img src="assets/images/omni.jpeg" alt="logo" height="40"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 fw-bold">OMNIBSIC Membership Registration</h4>
                                <p class="text-muted mb-4">Don't have an account? Create your account, it takes a few minutes </p>
                            </div>

                            <form action="dashboard.php" novalidate method="get" class="register" enctype='multipart/form-data'>
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Title</label>
                                    <select class="form-select" id="example-select" name="title">
                                        <option selected></option>
                                        <option>Rev.</option>
                                        <option>Mr.</option>
                                        <option>Mrs.</option>
                                        <option>Miss</option>
                                        <option>Dr.</option>
                                        <option>Sis.</option>
                                        <option>Fr.</option>
                                        <option>Ps.</option>
                                        <option>Others</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="fullname" class="form-label">First Name</label>
                                    <input class="form-control" type="text" id="fullname" placeholder="Enter your First Name" required name="fname">
                                </div>
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Last Name</label>
                                    <input class="form-control" type="text" id="fullname" placeholder="Enter your Last Name" required name="lname">
                                </div>
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Other Names</label>
                                    <input class="form-control" type="text" id="fullname" placeholder="Other Name" required name="oname">
                                </div>
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Gender</label>
                                    <select class="form-select" id="example-select" name="gender">
                                        <option selected></option>
                                        <option>Male</option>
                                        <option>Female</option>

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="example-date" class="form-label">Date</label>
                                    <input class="form-control" id="example-date" type="date" name="tdate">
                                </div>



                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Contact Number</label>
                                    <input class="form-control" type="text" id="contact" required placeholder="Enter your phone Number" name="contact">
                                </div>
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">WhatsApp Number</label>
                                    <input class="form-control" type="text" id="whatsapp" required placeholder="Enter your WhatsApp Number" name="wnumber">
                                </div>

                                <div class="mb-3">
                                    <label for="Emergency Contact Number" class="form-label">Emergency Contact Number</label>
                                    <input class="form-control" type="text" id="emergency" required placeholder="Enter your Emergency contact Number" name="enumber">
                                </div>

                                <div class="mb-3">
                                    <label for="Emergency Contact Number" class="form-label">Residential Digital Address</label>
                                    <input class="form-control" type="text" id="emergency" required placeholder="Enter your GPS Address" name="address">
                                </div>

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Occupation</label>
                                    <input class="form-control" type="text" id="occupation" required placeholder="Enter your Occupation" name="occupation">
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Marital Status</label>
                                    <select class="form-select" id="example-select" name="mstatus">
                                        <option selected></option>
                                        <option>Single</option>
                                        <option>Married</option>

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Region</label>
                                    <select class="form-select" id="example-select" name="region">
                                        <option selected value="">
                                        </option>

                                        <option value="Greater Accra">Greater Accra</option>
                                        <option value="Ashanti Region">Ashanti Region</option>
                                        <option value="Ahafo Region">Ahafo Region</option>
                                        <option value="Bono Region">Bono Region</option>
                                        <option value="Bono East Region">Bono East Region</option>
                                        <option value="Central Region">Central Region</option>
                                        <option value="Eastern Region">Eastern Region</option>
                                        <option value="Northern Region">Northern Region</option>
                                        <option value="North East Region">North East Region</option>
                                        <option value="Oti Region">Oti Region</option>
                                        <option value="Savannah Region">Savannah Region</option>
                                        <option value="Upper East Region">Upper East Region</option>
                                        <option value="Upper West Region">Upper West Region</option>
                                        <option value="Volta Region">Volta Region</option>
                                        <option value="Western Region">Western Region</option>
                                        <option value="Western North Region">Western North Region</option>

                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Nationality</label>
                                    <select class="form-select" id="example-select" name="nationality">
                                        <option selected></option>
                                        <option>Ghanaian</option>
                                        <option>Foreigner</option>

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-fileinput" class="form-label">Passport Size Picture</label>
                                    <input type="file" id="example-fileinput" class="form-control" name="passport">
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Educational Level</label>
                                    <select class="form-select" id="example-select" name="edulevel">
                                        <option selected></option>
                                        <option>Senior High Certificate</option>
                                        <option>Diploma Certificate</option>
                                        <option>Bachelor's Degree</option>
                                        <option>Master's Degree</option>
                                        <option>Doctorate Degree</option>
                                        <option>Others</option>

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Specialised Area Of Counselling</label>
                                    <select class="form-select" id="example-select" name="area">
                                        <option selected></option>
                                        <option >Marriage and Family</option>
                                        <option >Guidance and Career</option>


                                        <option >Rehabilitaion</option>
                                        <option >Mental Health</option>
                                        <option >Substance Abuse</option>


                                        <option >School and Careets</option>
                                        <option >Others</option>

                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Do you have Physical Challenge(s)?</label>
                                    <select class="form-select" id="example-select" name="challenge">
                                        <option selected></option>
                                        <option>Yes</option>
                                        <option>No</option>


                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">T-Shirt Colour Preference</label>
                                    <select class="form-select" id="example-select" name="color">
                                        <option selected></option>
                                        <option>Any</option>
                                        <option>White</option>
                                        <option>Blue</option>
                                        <option>Black</option>
                                        <option>Orange</option>


                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">T-Shirt Size Preference</label>
                                    <select class="form-select" id="example-select" name="size">
                                        <option selected></option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XXL</option>
                                        <option>XXXL</option>


                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Are you a Student?</label>
                                    <select class="form-select" id="example-select" name="student">
                                        <option selected></option>
                                        <option>Yes</option>
                                        <option>No</option>


                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Name of Institution / School</label>
                                    <input class="form-control" type="text" id="school" required placeholder="Enter the Name of your Institution" name="school">
                                </div>
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Programme Of Study</label>
                                    <input class="form-control" type="text" id="programme" required placeholder="Enter your programme of study" name="programme">
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="datepicker-preview">
                                        <div class="col-lg-6">
                                            <div class="mb-3 position-relative" id="datepicker6">
                                                <label class="form-label">Year Of Entry</label>
                                                <input type="text" class="form-control" data-provide="datepicker" data-date-min-view-mode="2" data-date-container="#datepicker6" name="year">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label">Upload Student ID Card</label>
                                            <input type="file" id="example-fileinput" class="form-control" name="idcard">
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-select" class="form-label">How did you hear/Know of this association</label>
                                            <select class="form-select" id="example-select" name="heard">
                                                <option selected></option>
                                                <option>OMNIBSIC Website</option>
                                                <option>Facebook</option>
                                                <option>WhatsApp</option>
                                                <option>Instagram</option>
                                                <option>Friend</option>
                                                <option>News Papers</option>
                                                <option>TUCEE Institute of Counselling and Technology Website</option>


                                            </select>
                                        </div>









                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                                            <small id="emailHelp" class="form-text text-muted">Please make sur you remember the password to the email you are providing</small>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password">
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Confirm Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password" class="form-control" placeholder="Enter your password" name="repass">
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                        <label class="form-check-label" for="checkbox-signup">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                    </div>
                                </div> -->

                                        <div class="mb-3 text-center">
                                            <button class="btn btn-primary" type="submit"> Sign Up </button>
                                        </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Already have account? <a href="index.php" class="text-muted ms-1"><b>Log In</b></a></p>
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2021 - <script>
            document.write(new Date().getFullYear())
        </script> © OMNIBSIC
    </footer>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>

    <script src="processor.js"></script>

</body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-register.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:19:09 GMT -->

</html>