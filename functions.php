<?php

function db()
{
    return  'starter.php';
}

function login($email, $password)
{
    include 'starter.php';

    // extract($_POST);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $password = md5($password);
    $sel = mysqli_query($conn, "SELECT * FROM cmd WHERE email = '$email'");
    $sel2 = mysqli_query($conn, "SELECT * FROM cmd WHERE email = '$email' AND password = '$password'");

    if (mysqli_num_rows($sel) >= 1) {
        if (mysqli_num_rows($sel2) >= 1) {
            $row = mysqli_fetch_array($sel2);
            session_start();
            $_SESSION['id'] = $row['id'];

            echo 'loginsuccess';
        } else {
            echo 'Login details not correct';
        }
    } else {
        echo 'loginfailed';
    }
}

function logout()
{
    session_start();
    // session_destroy();
    unset($_SESSION['id']);
    echo '<script>window.location="index.php"</script>';
}

function checker()
{
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '<script>
        alert("You need to login");
        window.location="index.php"</script>';
    }
}

function members()
{
    include 'starter.php';
    // session_start();
    $id = $_SESSION['id'];

    $d = mysqli_query($conn, "SELECT * FROM core_staffuser WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}

function adminmembers()
{
    include 'starter.php';
    // session_start();
    $id = $_SESSION['id'];

    $d = mysqli_query($conn, "SELECT * FROM cmd WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}


function upmembers()
{
    include 'starter.php';
    // session_start();
    // $id = $_SESSION['id'];
    $id = $_GET['id'];

    $d = mysqli_query($conn, "SELECT * FROM cmd WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}



function updatestaff($id, $name, $email,  $contact, $bene, $event)

{
    include 'starter.php';
    // $id = $_GET['id'];
    extract($_POST);
    $up = mysqli_query($conn, "UPDATE core_staffuser SET username = '$name', email='$email', contact= '$contact', bene_uid='$bene', event='$event'   WHERE id='$id'  ");
    if ($up) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function updatebene($id, $name, $contact, $tdate)

{
    include 'starter.php';
    // $id = $_GET['id'];
    extract($_POST);


    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "assets/images/" . $filename;

    $dd = date('jS F, Y');

    $ins = mysqli_query($conn, "UPDATE core_beneficiaries SET name = '$name', contact = '$contact', image='$folder', date = '$tdate' WHERE id='$id'  ");

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder) && $ins) {
        echo "Updated Successfully";
    } else {
        echo "failed";
    }
    // $up = mysqli_query($conn, "UPDATE core_staffuser SET username = '$name', email='$email', contact= '$contact', pin='$pin', bene_uid='$bene', event='$event'   WHERE id='$id'  ");
    // if ($up) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function updaterate($id, $usd, $gbp, $eur, $cfa)

{
    include 'starter.php';
    extract($_POST);
    $up = mysqli_query($conn, "UPDATE core_rates SET usd='$usd',gbp='$gbp',eur='$eur',cfa='$cfa' WHERE id='$id'  ");
    if ($up) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function userstaff()
{
    include 'starter.php';
    // session_start();
    // $id = $_SESSION['id'];
    $id = $_GET['id'];

    $d = mysqli_query($conn, "SELECT * FROM core_staffuser WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}


function userstaffbene()
{
    include 'starter.php';
    // session_start();
    // $id = $_SESSION['id'];
    $id = $_GET['id'];

    $d = mysqli_query($conn, "SELECT * FROM core_staffuser WHERE id ='$id'");
    $row = mysqli_fetch_array($d);
    $uid = $row['bene_uid'];
    $c = mysqli_query($conn, "SELECT * FROM core_beneficiaries WHERE id ='$uid'");
    $row2 = mysqli_fetch_array($c);

    return $row2['name'];
}

function userrate()
{
    include 'starter.php';
    // session_start();
    // $id = $_SESSION['id'];
    $id = $_GET['id'];

    $d = mysqli_query($conn, "SELECT * FROM core_rates WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}

function userbene()
{
    include 'starter.php';
    // session_start();
    // $id = $_SESSION['id'];
    $id = $_GET['id'];

    $d = mysqli_query($conn, "SELECT * FROM core_beneficiaries WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}




function updateuser($id, $name,  $contact, $gender, $wnumber, $enumber, $address, $occupation, $mstatus, $region, $nationality, $edulevel, $area, $membership, $challenge, $color, $size, $school, $programme, $year)

{
    include 'starter.php';
    // $id = $_GET['id'];
    extract($_POST);
    $up = mysqli_query($conn, "UPDATE members SET name = '$name', gender = '$gender', email='$email', contact= '$contact', whatsapp='$wnumber', tdate = '$tdate', emergency = '$enumber', gpsAddress = '$address', occupation='$occupation',maritalStatus = '$mstatus', region = '$region', nationality = '$nationality', eduLevel = '$edulevel', counsellingArea = '$area', membership = '$membership', phyChallenge='$challenge', color='$color',size='$size',school='$school',programme='$programme',year='$year', tdate='$tdate'  WHERE id='$id'  ");
    if ($up) {
        echo 'Updated Successfully ';
    } else {
        echo 'Failed to update record . Try again';
    }
}

function confirmuser($id, $confirm)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $conf = mysqli_query($conn, "UPDATE members SET confirm ='$confirm' WHERE id='$id'  ");
    if ($conf) {
        echo 'Participation Confirmed ';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function credit()
{

    // include mysql database configuration file
    // include 'functions.php';
    include 'starter.php';

    if (isset($_POST['submit'])) {

        // Allowed mime types
        $fileMimes = array(
            'text/x-comma-separated-values',
            'text/comma-separated-values',
            'application/octet-stream',
            'application/vnd.ms-excel',
            'application/x-csv',
            'text/x-csv',
            'text/csv',
            'application/csv',
            'application/excel',
            'application/vnd.msexcel',
            'text/plain'
        );

        // Validate whether selected file is a CSV file
        if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes)) {

            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            // Skip the first line
            fgetcsv($csvFile);

            // Parse data from CSV file line by line
            // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE) {
                // Get row data
                $id = $getData[0];
                $name = $getData[1];
                $email = $getData[2];
                $points = $getData[3];

                // If user already exists in the database with the same email
                $query = "SELECT id FROM members WHERE id = '" . $getData[0] . "'";

                $check = mysqli_query($conn, $query);

                if ($check->num_rows > 0) {
                    mysqli_query($conn, "UPDATE members SET points='$points' WHERE id='$id'  ");
                    echo "pointsadded";
                } else {
                    //  mysqli_query($conn, "INSERT INTO members (name, email, phone, created_at, updated_at, status) VALUES ('" . $name . "', '" . $email . "', '" . $phone . "', NOW(), NOW(), '" . $status . "')");
                    echo "pointsfailed";
                }
            }

            // Close opened CSV file
            fclose($csvFile);

            header("Location: members.php");
        } else {
            echo "Please select valid file";
        }
    }
}







function dispaidstatspertotal($district)
{
    include 'starter.php';
    // $id = $_GET['id'];

    $c = mysqli_query($conn, "SELECT * FROM transactions");
    $count2 = mysqli_num_rows($c);
    $tot = $count2 * 70;

    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c) * 70;
    echo '<h4 class="mb-0 text-success">(' . round(($count / $tot) * 100, 2) . '%)</h4>';
}

function dispaidstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">' . $count . '</h4>';
}

function dispaidstatsper($district)
{
    include 'starter.php';
    // $id = $_GET['id'];

    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">(' . round(($count / $count2) * 100, 2) . '%)</h4>';
    // echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}









function disunconfstats($district)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $ci = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND confirm='confirmed'");
    $count = mysqli_num_rows($ci);

    $val = $count2 - $count;
    echo '<h4 class="mb-0 text-success">' . $val . '</h4>';

    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function disunconfstatsper($district)
{
    include 'starter.php';
    // $id = $_GET['id'];

    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $ci = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND confirm='confirmed'");
    $count = mysqli_num_rows($ci);

    $val = $count2 - $count;
    echo '<h4 class="mb-0 text-success">(' . round(($val / $count2) * 100, 2) . '%)</h4>';
    // echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function foodstats($bene)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM core_beneficiaries WHERE id='$bene' ");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">' . $count . '</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function get_report($bene)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM core_beneficiaries WHERE id='$bene' ");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">' . $count . '</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}




function register($name, $email, $password)
{
    $password = md5($password);
    include 'starter.php';
    $sel = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email'");
    if (mysqli_num_rows($sel) >= 1) {
        echo 'Sorry User account exist';
    } else {
        $dd = date('jS F, Y');
        $ins = mysqli_query($conn, "INSERT INTO members (name,email,password,dateadded) VALUES('$name','$email','$password','$dd')");

        if ($ins) {
            $sel = mysqli_query($conn, "SELECT * FROM members WHERE email = '$email' AND password='$password'");
            $row = mysqli_fetch_array($sel);
            session_start();
            $_SESSION['id'] = $row['id'];
            echo 'registered';
        } else {
            echo 'Registeration failed';
        }
    }
}

function register1($name, $contact, $tdate)
{

    include 'starter.php';


    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "assets/images/" . $filename;

    $dd = date('jS F, Y');

    $ins = mysqli_query($conn, "INSERT INTO core_beneficiaries (name,contact,image,date) VALUES('$name','$contact','$folder','$tdate')");

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder) && $ins) {
        echo "beneadded";
    } else {
        echo "failed";
    }
}


function addstaff($name, $contact, $bene, $pin, $event)
{

    include 'starter.php';



    $password = 'pbkdf2_sha256$390000$0fI0HMtqWSwTXVqj8L3c1s$dltZY9+TvH+cjLUTTGlXP+LnT85fQSG55QC6ktRtZjg=';
    $num = 1;

    $ins = mysqli_query($conn, "INSERT INTO core_staffuser (username,contact,bene_uid,pin,password,is_staff,is_superuser,is_active,event) VALUES ('$name','$contact','$bene','$pin','$password','$num','$num','$num', '$event')");

    if ($ins) {
        echo "staffadded";
    } else {
        echo "failed";
    }
}


function addrate($usd, $gbp, $eur, $cfa)
{

    include 'starter.php';

    $dd = date('jS F, Y');
    $ins = mysqli_query($conn, "INSERT INTO core_rates (usd,gbp,eur,cfa,date) VALUES ('$usd','$gbp','$eur','$cfa','$dd')");

    if ($ins) {
        echo "rateadded";
    } else {
        echo "failed";
    }
}



function addevent($name)
{

    include 'starter.php';

    $ins = mysqli_query($conn, "INSERT INTO core_event (event) VALUES ('$name')");
    if ($ins) {
        echo "eventadded";
    } else {
        echo "failed";
    }
}


function addbank($name)
{

    include 'starter.php';

    $ins = mysqli_query($conn, "INSERT INTO core_banks (name) VALUES ('$name')");
    if ($ins) {
        echo "bankadded";
    } else {
        echo "failed";
    }
}




function changepass($id, $password, $newpass)
{
    $password = md5($password);
    $newpass = md5($newpass);
    include 'starter.php';
    $check = mysqli_query($conn, "SELECT * FROM cmd WHERE password = '$password'");
    if (mysqli_num_rows($check) >= 1) {
        $up = mysqli_query($conn, "UPDATE cmd SET password = '$newpass' WHERE id ='$id'");
        if ($up) {
            echo 'changepasssuccess';
        } else {
            echo 'Failed to change password';
        }
    } else {
        echo 'Incorrect Password';
    }
}
function transactions($bene)
{
    $id = $_SESSION['id'];
    include 'starter.php';

    $sel = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene' ORDER BY  pay_date DESC");
    $num = 1;
    while ($row = mysqli_fetch_array($sel)) {
        echo '<tr>
        <td>
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">' . $num . '</small>
               
            </div>
        </td>
        <td>
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">' . $row['donor_name'] . '</small>
               
            </div>
        </td>
        <td>
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">' . $row['currency'] . '</small>
                
            </div>
        </td>
        <td>
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">' . $row['amount'] . '</small>
                
            </div>
        </td>

        <td>
        <div class="d-flex align-items-center">
            <small class="text-uppercase text-muted mr-2">' . $row['payment_method'] . '</small>
            
        </div>
    </td>
        
        
        
    </tr>';

        $num = $num + 1;
        // code...
    }
}

function getbene()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM core_beneficiaries ORDER BY id DESC ');
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');

    while ($row = mysqli_fetch_array($u)) {
        // $y = mysqli_query($conn, 'SELECT * FROM transactions WHERE uid = ' . $row['id'] . ' ');

        // $row2 = mysqli_fetch_array($y);
        echo '
        <option value="' . $row['id'] . '">' . $row['name'] . '</option>
        ';

        // echo '<input id="email" type="hidden"  value="' . $row['image'] . '" class="form-control" name="photo">';


    }
}


function getevent()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM core_event ORDER BY id DESC ');
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');

    while ($row = mysqli_fetch_array($u)) {

        echo '
        <option value="' . $row['event'] . '">' . $row['event'] . '</option>
        ';
    }
}


function getbene_spec()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM core_beneficiaries ORDER BY id DESC ');
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');

    while ($row = mysqli_fetch_array($u)) {
        // $y = mysqli_query($conn, 'SELECT * FROM transactions WHERE uid = ' . $row['id'] . ' ');

        // $row2 = mysqli_fetch_array($y);
        echo '
        <option value="' . $row['name'] . '">' . $row['name'] . '</option>
        ';

        // echo '<input id="email" type="hidden"  value="' . $row['image'] . '" class="form-control" name="photo">';


    }
}




function registered()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM core_account ORDER BY id DESC ');
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');

    while ($row = mysqli_fetch_array($u)) {
        // $y = mysqli_query($conn, 'SELECT * FROM transactions WHERE uid = ' . $row['id'] . ' ');

        // $row2 = mysqli_fetch_array($y);
        echo '<tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['donor_name'] . '</td>
        <td>' . $row['beneficiary_name'] . '</td>
        <td> <span class="js-lists-values-employee-name">' . $row['staff_name'] . '</span></td>
        
        <td>' . $row['phone_number'] . '</td>
        <td><span class="js-lists-values-employee-title">' . $row['payment_method'] . '</span></td>
        <td><span class="js-lists-values-employee-district">' . $row['currency'] . ' ' . $row['amount'] . '</span>
   
        <td><span class="js-lists-values-employee-paid">' . $row['pay_date'] . '</span></td> 
       




                                        
    </tr>';
    }
}


function staff()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM core_staffuser ORDER BY id DESC ');
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');

    while ($row = mysqli_fetch_array($u)) {
        // $y = mysqli_query($conn, 'SELECT * FROM transactions WHERE uid = ' . $row['id'] . ' ');

        // $row2 = mysqli_fetch_array($y);

        $parsed = date_parse($row['last_login']);
        $unix_timestamp = mktime($parsed['hour'], $parsed['minute'], $parsed['second'], $parsed['month'], $parsed['day'], $parsed['year']);

        // echo date('l', $unix_timestamp);
        echo '<tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['username'] . '</td>
        <td> <span class="js-lists-values-employee-name">' . $row['contact'] . '</span></td>
        <td><span class="js-lists-values-employee-title">' .  date("l jS \of F Y h:i:s A", $unix_timestamp) . '</span></td>
        <td><a class="btn btn-primary" href="update_user.php?id=' . $row['id'] . '"><i class="fa fa-edit"></i></a></td> 
        <td><button class="btn btn-danger delme" id=' . $row['id'] . '"><i class="fa fa-trash"></i></button></td>                                         
    </tr>';
    }
}


function rates()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM core_rates ORDER BY id DESC ');
    while ($row = mysqli_fetch_array($u)) {
        echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['usd'] . '</td>
                <td>' . $row['gbp'] . '</td>
                <td> <span class="js-lists-values-employee-name">' . $row['eur'] . '</span></td>
                <td><span class="js-lists-values-employee-title">' . $row['cfa'] . '</span></td>
                <td><a class="btn btn-primary" href="update_rate.php?id=' . $row['id'] . '"><i class="fa fa-edit"></i></a></td>                                                
                </tr>';
    }
}





function bene()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM core_beneficiaries ORDER BY id DESC ');
    while ($row = mysqli_fetch_array($u)) {
        echo '<tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['name'] . '</td>
        <td> <span class="js-lists-values-employee-name">' . $row['contact'] . '</span></td>
        <td> <span class="js-lists-values-employee-name">' . $row['date'] . '</span></td>
        <td><span class="js-lists-values-employee-title">' . $row['image'] . '</span></td>
        <td><a class="btn btn-primary" href="update_bene.php?id=' . $row['id'] . '"><i class="fa fa-edit"></i></a></td>                             
    </tr>';
    }
}



function countmembers()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM core_account');
    $d = mysqli_query($conn, 'SELECT * FROM core_rates ORDER BY id DESC LIMIT 1');
    if ($d) {

        $row2 = mysqli_fetch_array($d);
    }
    $amount = 0;
    $usd = 0;
    $eur = 0;
    $gbp = 0;
    $cfa = 0;
    $ghc = 0;

    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'USD') {
            $usd = $usd + $row['amount'];
        } else if ($row['currency'] == 'GBP') {
            $gbp = $gbp + $row['amount'];
        } else if ($row['currency'] == 'EUR') {
            $eur = $eur + $row['amount'];
        } else if ($row['currency'] == 'CFA') {
            $cfa = $cfa + $row['amount'];
        } else if ($row['currency'] == 'GHS') {
            $ghc = $ghc + $row['amount'];
        }
    }

    if (isset($row2['usd'])) {


        $usd = $usd * $row2['usd'];
        $gbp = $gbp * $row2['gbp'];
        $eur = $eur * $row2['eur'];
        $cfa = $cfa * $row2['cfa'];
        $ghs = $ghc + $usd + $gbp + $eur + $cfa;

        echo  'GH₵ ' . number_format($ghs, 2);
    } else {

        echo 'Add rates';
    }
}

function usd()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM core_account');
    $amount = 0;
    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'USD') {
            $amount = $amount + $row['amount'];
        }
    }

    echo  'USD ' . number_format($amount, 2);
}

function usd_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $amount = 0;
    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'USD') {
            $amount = $amount + $row['amount'];
        }
    }

    echo  'USD ' . number_format($amount, 2);
}


function cash_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $amount = 0;
    $d = mysqli_query($conn, 'SELECT * FROM core_rates ORDER BY id DESC LIMIT 1');
    if ($d) {

        $row2 = mysqli_fetch_array($d);
    }
    // $row2 = mysqli_fetch_array($d);
    $amount = 0;
    $usd = 0;
    $eur = 0;
    $gbp = 0;
    $cfa = 0;
    $ghc = 0;
    while ($row = mysqli_fetch_array($c)) {


        if ($row['payment_method'] == 'Cash') {

            if ($row['currency'] == 'USD') {
                $usd = $usd + $row['amount'];
            } else if ($row['currency'] == 'GBP') {
                $gbp = $gbp + $row['amount'];
            } else if ($row['currency'] == 'EUR') {
                $eur = $eur + $row['amount'];
            } else if ($row['currency'] == 'CFA') {
                $cfa = $cfa + $row['amount'];
            } else if ($row['currency'] == 'GHS') {
                $ghc = $ghc + $row['amount'];
            }
        }
    }

    if (isset($row2['usd'])) {


        $usd = $usd * $row2['usd'];
        $gbp = $gbp * $row2['gbp'];
        $eur = $eur * $row2['eur'];
        $cfa = $cfa * $row2['cfa'];
        $ghs = $ghc + $usd + $gbp + $eur + $cfa;

        return  'GH₵ ' . number_format($ghs, 2);
    } else {

        echo 'Add rates';
    }
}

function momo_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");

    $d = mysqli_query($conn, 'SELECT * FROM core_rates ORDER BY id DESC LIMIT 1');
    if ($d) {

        $row2 = mysqli_fetch_array($d);
    }
    // $row2 = mysqli_fetch_array($d);
    $amount = 0;
    $usd = 0;
    $eur = 0;
    $gbp = 0;
    $cfa = 0;
    $ghc = 0;
    while ($row = mysqli_fetch_array($c)) {


        if ($row['payment_method'] == 'Momo') {

            if ($row['currency'] == 'USD') {
                $usd = $usd + $row['amount'];
            } else if ($row['currency'] == 'GBP') {
                $gbp = $gbp + $row['amount'];
            } else if ($row['currency'] == 'EUR') {
                $eur = $eur + $row['amount'];
            } else if ($row['currency'] == 'CFA') {
                $cfa = $cfa + $row['amount'];
            } else if ($row['currency'] == 'GHS') {
                $ghc = $ghc + $row['amount'];
            }



           
        }
    }
    if (isset($row2['usd'])) {
        $usd = $usd * $row2['usd'];
        $gbp = $gbp * $row2['gbp'];
        $eur = $eur * $row2['eur'];
        $cfa = $cfa * $row2['cfa'];

        $amount = $ghc + $usd + $gbp + $eur + $cfa;



        echo  'GH₵ ' . number_format($amount, 2);
    } else {
        echo 'Add rates';
    }

   

}

function visa_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $amount = 0;
    $d = mysqli_query($conn, 'SELECT * FROM core_rates ORDER BY id DESC LIMIT 1');
    if ($d) {

        $row2 = mysqli_fetch_array($d);
    }
    // $row2 = mysqli_fetch_array($d);
    $amount = 0;
    $usd = 0;
    $eur = 0;
    $gbp = 0;
    $cfa = 0;
    $ghc = 0;
    while ($row = mysqli_fetch_array($c)) {
        if ($row['payment_method'] == 'Visa') {



            if ($row['currency'] == 'USD') {
                $usd = $usd + $row['amount'];
            } else if ($row['currency'] == 'GBP') {
                $gbp = $gbp + $row['amount'];
            } else if ($row['currency'] == 'EUR') {
                $eur = $eur + $row['amount'];
            } else if ($row['currency'] == 'CFA') {
                $cfa = $cfa + $row['amount'];
            } else if ($row['currency'] == 'GHS') {
                $ghc = $ghc + $row['amount'];
            }


            $usd = $usd * $row2['usd'];
            $gbp = $gbp * $row2['gbp'];
            $eur = $eur * $row2['eur'];
            $cfa = $cfa * $row2['cfa'];


            $ghc = $ghc + $usd + $gbp + $eur + $cfa;

            // echo  'GH₵ ' . number_format($ghs, 2);
        }
    }

    echo  'GH₵ ' . number_format($ghc, 2);
    // echo  number_format($ghs, 2);
}


function cheque_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $amount = 0;
    $d = mysqli_query($conn, 'SELECT * FROM core_rates ORDER BY id DESC LIMIT 1');
    if ($d) {

        $row2 = mysqli_fetch_array($d);
    }
    // $row2 = mysqli_fetch_array($d);
    $amount = 0;
    $usd = 0;
    $eur = 0;
    $gbp = 0;
    $cfa = 0;
    $ghc = 0;



    while ($row = mysqli_fetch_array($c)) {

        if ($row['payment_method'] == 'Cheque') {


            if ($row['currency'] == 'USD') {
                $usd = $usd + $row['amount'];
            } else if ($row['currency'] == 'GBP') {
                $gbp = $gbp + $row['amount'];
            } else if ($row['currency'] == 'EUR') {
                $eur = $eur + $row['amount'];
            } else if ($row['currency'] == 'CFA') {
                $cfa = $cfa + $row['amount'];
            } else if ($row['currency'] == 'GHS') {
                $ghc = $ghc + $row['amount'];
            }


            $usd = $usd * $row2['usd'];
            $gbp = $gbp * $row2['gbp'];
            $eur = $eur * $row2['eur'];
            $cfa = $cfa * $row2['cfa'];


            $ghc = $ghc + $usd + $gbp + $eur + $cfa;

            // echo  'GH₵ ' . number_format($ghs, 2);
        }
    }

    echo  'GH₵ ' . number_format($ghc, 2);
    // echo  number_format($ghs, 2);
}


function gifts_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $gifts = 0;

    while ($row = mysqli_fetch_array($c)) {
        if ($row['payment_method'] == 'Gifts') {
            $gifts = $gifts + 1;
        }
    }
    echo  $gifts;
}


function cash_spec_num($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $cash = 0;

    while ($row = mysqli_fetch_array($c)) {
        if ($row['payment_method'] == 'Cash') {
            $cash = $cash + 1;
        }
    }
    return $cash;
}

function momo_spec_num($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $momo = 0;

    while ($row = mysqli_fetch_array($c)) {
        if ($row['payment_method'] == 'Momo') {
            $momo = $momo + 1;
        }
    }
    return $momo;
}



function visa_spec_num($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $visa = 0;

    while ($row = mysqli_fetch_array($c)) {
        if ($row['payment_method'] == 'Visa') {
            $visa = $visa + 1;
        }
    }
    return $visa;
}

function cheque_spec_num($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $cheque = 0;

    while ($row = mysqli_fetch_array($c)) {
        if ($row['payment_method'] == 'Cheque') {
            $cheque = $cheque + 1;
        }
    }
    return $cheque;
}

function usd_spec_num($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $usd = 0;

    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'USD') {
            $usd = $usd + 1;
        }
    }
    return $usd;
}

function gbp_spec_num($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $gbp = 0;

    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'GBP') {
            $gbp = $gbp + 1;
        }
    }
    return $gbp;
}

function eur_spec_num($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $eur = 0;

    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'EUR') {
            $eur = $eur + 1;
        }
    }
    return $eur;
}

function cfa_spec_num($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $cfa = 0;

    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'CFA') {
            $cfa = $cfa + 1;
        }
    }
    return $cfa;
}
function gbp()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM core_account');
    $amount = 0;
    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'GBP') {
            $amount = $amount + $row['amount'];
        }
    }

    echo  'GBP ' . number_format($amount, 2);
}


function gbp_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $amount = 0;
    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'GBP') {
            $amount = $amount + $row['amount'];
        }
    }

    echo  'GBP ' . number_format($amount, 2);
}

function eur()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM core_account');
    $amount = 0;
    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'EUR') {
            $amount = $amount + $row['amount'];
        }
    }

    echo  'EUR ' . number_format($amount, 2);
}



function eur_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $amount = 0;
    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'EUR') {
            $amount = $amount + $row['amount'];
        }
    }

    echo  'EUR ' . number_format($amount, 2);
}

function cfa()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM core_account');
    $amount = 0;
    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'CFA') {
            $amount = $amount + $row['amount'];
        }
    }

    echo  'CFA ' . number_format($amount, 2);
}


function cfa_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $amount = 0;
    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'CFA') {
            $amount = $amount + $row['amount'];
        }
    }

    echo  'CFA ' . number_format($amount, 2);
}

function countmembers_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    include 'starter.php';
    // $c = mysqli_query($conn, 'SELECT * FROM core_account');
    $d = mysqli_query($conn, 'SELECT * FROM core_rates ORDER BY id DESC LIMIT 1');
    if ($d) {

        $row2 = mysqli_fetch_array($d);
    }
    // $row2 = mysqli_fetch_array($d);
    $amount = 0;
    $usd = 0;
    $eur = 0;
    $gbp = 0;
    $cfa = 0;
    $ghc = 0;

    while ($row = mysqli_fetch_array($c)) {
        if ($row['currency'] == 'USD') {
            $usd = $usd + $row['amount'];
        } else if ($row['currency'] == 'GBP') {
            $gbp = $gbp + $row['amount'];
        } else if ($row['currency'] == 'EUR') {
            $eur = $eur + $row['amount'];
        } else if ($row['currency'] == 'CFA') {
            $cfa = $cfa + $row['amount'];
        } else if ($row['currency'] == 'GHS') {
            $ghc = $ghc + $row['amount'];
        }
    }
    if (isset($row2['usd'])) {


        $usd = $usd * $row2['usd'];
        $gbp = $gbp * $row2['gbp'];
        $eur = $eur * $row2['eur'];
        $cfa = $cfa * $row2['cfa'];
        $ghs = $ghc + $usd + $gbp + $eur + $cfa;

        echo  'GH₵ ' . number_format($ghs, 2);
    } else {

        echo 'Add rates';
    }
}



function showdonors()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM core_account ORDER BY  pay_date DESC LIMIT 20');

    while ($row = mysqli_fetch_array($c)) {

        echo '<div class="border border-light p-3 rounded mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div style="height:30px;
                                        width:10%;
                                        overflow:hidden;
                                        cursor:pointer;
                                        ">
                                            <p class="font-18 mb-1 ">' . ucwords($row['donor_name']) . '</p>
                                            
                                        </div>
                                        <div  class="float-end" style="height:30px;
                                        width:10%;
                                        overflow:hidden;
                                        cursor:pointer;
                                        "
                                        >
                                            <p class="font-18 mb-1">' . ucwords($row['staff_name']) . '</p>                                
                                        </div>
                                        <div  class="float-end" style="height:30px;
                                        width:10%;
                                        overflow:hidden;
                                        cursor:pointer;
                                        "
                                        >';


        if ($row['amount'] == NULL) {
            echo ' 
                                            <p class="text-success my-0"> Gifts </p>
                                            ';
        } else {
            echo '
                                         <p class="text-success my-0"> ' . $row['currency'] . ' ' . $row['amount'] . '</p>
                                        ';
        }

        echo '


                                        
                                        
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-sucsess rounded-circle h3 my-0">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>';
    }
}


function showdonors_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene' ORDER BY  pay_date DESC");

    while ($row = mysqli_fetch_array($c)) {

        echo '<div class="border border-light p-3 rounded mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <div style="height:30px;
            width:10%;
            overflow:hidden;
            cursor:pointer;
            ">
                <p class="font-18 mb-1 ">' . ucwords($row['donor_name']) . '</p>
                
            </div>
            <div  class="float-end" style="height:30px;
            width:10%;
            overflow:hidden;
            cursor:pointer;
            "
            >
                <p class="font-18 mb-1">' . ucwords($row['staff_name']) . '</p>                                
            </div>
            <div  class="float-end" style="height:30px;
            width:10%;
            overflow:hidden;
            cursor:pointer;
            "
            >';


        if ($row['amount'] == NULL) {
            echo ' 
                <p class="text-success my-0"> Gifts </p>
                ';
        } else {
            echo '
             <p class="text-success my-0"> ' . $row['currency'] . ' ' . $row['amount'] . '</p>
            ';
        }

        echo '


            
            
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-sucsess rounded-circle h3 my-0">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
            </div>
        </div>
    </div>';
    }
    // $amount = 0;
    // $amount = $amount + $c['amount'];
    // $count = $c['amount'];
    // $count = mysqli_num_rows($c);


}
function transactionstotal($bene)
{
    // session_start();
    $id = $_SESSION['id'];
    include 'starter.php';

    $u = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene' ORDER BY  pay_date DESC");
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');
    // $c = mysqli_query($conn, 'SELECT * FROM core_account');
    $d = mysqli_query($conn, 'SELECT * FROM core_rates ORDER BY id DESC LIMIT 1');
    if ($d) {

        $row2 = mysqli_fetch_array($d);
    }
    // $row2 = mysqli_fetch_array($d);
    $amount = 0;
    $usd = 0;
    $eur = 0;
    $gbp = 0;
    $cfa = 0;
    $ghc = 0;

    $amount = 0;
    while ($row = mysqli_fetch_array($u)) {

        if ($row['currency'] == 'USD') {
            $usd = $usd + $row['amount'];
        } else if ($row['currency'] == 'GBP') {
            $gbp = $gbp + $row['amount'];
        } else if ($row['currency'] == 'EUR') {
            $eur = $eur + $row['amount'];
        } else if ($row['currency'] == 'CFA') {
            $cfa = $cfa + $row['amount'];
        } else if ($row['currency'] == 'GHS') {
            $ghc = $ghc + $row['amount'];
        }



        // $amount = $amount + $row['amount'];
    }

    if (isset($row2['usd'])) {


        $usd = $usd * $row2['usd'];
        $gbp = $gbp * $row2['gbp'];
        $eur = $eur * $row2['eur'];
        $cfa = $cfa * $row2['cfa'];


        $ghc = $ghc + $usd + $gbp + $eur + $cfa;

        return number_format($ghc, 2);
    } else {

        return 'Add rates';
    }
}


function totalstatus()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM core_account');
    $count = mysqli_num_rows($c);
    echo $count;
}


function totalstatus_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene' ");

    $count = mysqli_num_rows($c);
    echo $count;
}

function totalstaff()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM core_staffuser');
    $count = mysqli_num_rows($c);
    echo $count;
}


function totalbene()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM core_beneficiaries');

    $count = mysqli_num_rows($c);
    echo $count;
}


function dele($id)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $del = mysqli_query($conn, "DELETE FROM core_staffuser WHERE id = '$id'");

    if ($del) {
        echo 'userdele';
    } else {
        echo 'failed';
    }
}
