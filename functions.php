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



function updatestaff($id, $name, $email,  $contact, $pin, $bene)

{
    include 'starter.php';
    // $id = $_GET['id'];
    extract($_POST);
    $up = mysqli_query($conn, "UPDATE core_staffuser SET username = '$name', email='$email', contact= '$contact', pin='$pin', bene_uid='$bene'   WHERE id='$id'  ");
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


function show($cert)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $confi = mysqli_query($conn, "UPDATE members SET cert ='$cert'");
    if ($confi) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function showcredit($credit)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $confij = mysqli_query($conn, "UPDATE members SET creditconfirm ='$credit'");
    if ($confij) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}



function showquiz($quiz)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $confiu = mysqli_query($conn, "UPDATE members SET quiz ='$quiz'");
    if ($confiu) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function showcreditconfirm($creditconfirm, $district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $confiu = mysqli_query($conn, "UPDATE members SET creditconfirm ='$creditconfirm' WHERE district='$district'");
    if ($confiu) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function showdiscert($discert, $district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $confiu = mysqli_query($conn, "UPDATE members SET cert ='$discert' WHERE district='$district'");
    if ($confiu) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function settdate($tdate, $district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $tdate = date('jS F, Y', strtotime($tdate));
    $confiu = mysqli_query($conn, "UPDATE members SET tdate ='$tdate' WHERE district='$district'");
    if ($confiu) {
        echo 'Updated Successfully';
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



function showdisquiz($disquiz, $district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $confiu = mysqli_query($conn, "UPDATE members SET quiz ='$disquiz' WHERE district='$district'");
    if ($confiu) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function dispaidstatstotal($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">Gh¢ ' . $count * 70 . '</h4>';
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

    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
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


function disunpaidstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c);

    $val = $count2 - $count;
    echo '<h4 class="mb-0 text-success">' . $val . '</h4>';

    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}



function disunpaidstatsper($district)
{
    include 'starter.php';
    // $id = $_GET['id'];

    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c);

    $val = $count2 - $count;
    echo '<h4 class="mb-0 text-success">(' . round(($val / $count2) * 100, 2) . '%)</h4>';
    // echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function disconfstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND confirm='confirmed'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">' . $count . '</h4>';
}



function disconfstatsper($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $ci = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND confirm='confirmed'");
    $count = mysqli_num_rows($ci);
    echo '<h4 class="mb-0 text-success">(' . round(($count / $count2) * 100, 2) . '%)</h4>';
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


function countdistrict($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members");
    $count2 = mysqli_num_rows($c);
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district'");
    $count = mysqli_num_rows($c);
    echo $count;
    echo '(' . round(($count / $count2) * 100, 2) . '%)';

    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function enrolledcountdistrict($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members");
    $count2 = mysqli_num_rows($c);
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND enroll='enrolled'");
    $count = mysqli_num_rows($c);
    echo $count;
    echo '(' . round(($count / $count2) * 100, 2) . '%)';

    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function attendedcountdistrict($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members");
    $count2 = mysqli_num_rows($c);
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND attendance='Yes'");
    $count = mysqli_num_rows($c);
    echo $count;
    echo '(' . round(($count / $count2) * 100, 2) . '%)';

    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function jpfoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND foodpref='Jollof with chicken' AND paystatus='paid'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">' . $count . '</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}




function jcfoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND foodpref='Jollof with chicken' AND confirm='confirmed'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">' . $count . '</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function gafoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND foodpref='Jollof with Fish'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">' . $count . '</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function pgafoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND foodpref='Jollof with Fish' AND paystatus='paid'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">' . $count . '</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function cgafoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM members WHERE district='$district' AND foodpref='Jollof with Fish' AND confirm='confirmed'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">' . $count . '</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function sfoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];

    echo '<h4 class="card-title">Food Statistics for ' . $district . '</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function ssfoodstats($bene)
{
    include 'starter.php';
    // $id = $_GET['id'];

    echo '<h4 class="card-title">Statistics for ' . $bene . '</h4>';
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

function register1($name, $contact,)
{
  
    include 'starter.php';


	$filename = $_FILES["image"]["name"];
	$tempname = $_FILES["image"]["tmp_name"];
	$folder = "assets/images/" . $filename;

    $dd = date('jS F, Y');

    $ins = mysqli_query($conn, "INSERT INTO core_beneficiaries (name,contact,image,date) VALUES('$name','$contact','$folder','$dd')");

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder) && $ins) {
		echo "beneadded";
	} else {
		echo "failed";
	}
}


function addstaff($name, $contact, $bene, $pin)
{
  
    include 'starter.php';

    


    // $iterations=390000; 
    // $algorithm='sha256'; 


    // $salt = base64_encode(openssl_random_pseudo_bytes(9));

    // $hash = hash_pbkdf2($algorithm, $password, $salt, $iterations, 32, true);

    $password = 'pbkdf2_sha256$390000$GRYVoUS4ebSJFxTkXtz5zU$Qcz9n/jTD0FbnMu/me8kg5RFydEhmlvPvKfaajTQFXM=';
    $num = 1;

    $ins = mysqli_query($conn, "INSERT INTO core_staffuser (username,contact,bene_uid,pin,password,is_staff,is_superuser,is_active) VALUES ('$name','$contact','$bene','$pin','$password','$num','$num','$num')");

	if ($ins) {
		echo "staffadded";
	} else {
		echo "failed";
	}
}


function payment($uid, $ref, $amount)
{
    include 'starter.php';
    $dateadded = date('jS F,Y');
    $ins = mysqli_query($conn, "INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$uid','$ref','$amount','$dateadded')");
    $up = mysqli_query($conn, "UPDATE members SET paystatus ='paid' WHERE id ='$uid'");

    if ($ins || $up) {
        // echo''
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
function transactions()
{


    $id = $_SESSION['id'];
    include 'starter.php';

    $sel = mysqli_query($conn, "SELECT * FROM  core_account WHERE donor = 'kwame asante'");
    while ($row = mysqli_fetch_array($sel)) {
        echo '<tr>
        <td>
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">Transaction Amount</small>
                <a href="student-invoice.php"
                   class="text-body small"><span class="js-lists-values-document">' . $row['amount'] . '</span></a>
            </div>
        </td>
        
        <td class="text-center">
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">Status</small>
                <i class="material-icons text-success md-18 mr-2">lens</i>
                <small class="text-uppercase js-lists-values-status">paid</small>
            </div>
        </td>
        <td class="text-right">
            <div class="d-flex align-items-center text-right">
                <small class="text-uppercase text-muted mr-2">Date</small>
                <small class="text-uppercase js-lists-values-date">' . $row['dateadded'] . '</small>
            </div>
        </td>
    </tr>';
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
        <td> <span class="js-lists-values-employee-name">' . $row['staff_name'] . '</span></td>
        
        <td>' . $row['phone_number'] . '</td>
        <td><span class="js-lists-values-employee-title">' . $row['payment_method'] . '</span></td>
        <td><span class="js-lists-values-employee-district">' . $row['currency'] . '</span>
        <td><span class="js-lists-values-employee-district">' . $row['amount'] . '</span>
        <td><span class="js-lists-values-employee-paid">' . $row['pay_date'] . '</span></td> 
        <td><a class="btn btn-primary" href="update_user.php?id=' . $row['id'] . '"><i class="fa fa-edit"></i></a></td> 
        <td><button class="btn btn-danger delme" id=' . $row['id'] . '"><i class="fa fa-trash"></i></button></td>      




                                        
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
        echo '<tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['first_name'] . '</td>
        <td>' . $row['username'] . '</td>
        <td> <span class="js-lists-values-employee-name">' . $row['contact'] . '</span></td>
        
        
        <td><span class="js-lists-values-employee-title">' . $row['Beneficiary_name'] . '</span></td>
        
        
        <td><a class="btn btn-primary" href="update_user.php?id=' . $row['id'] . '"><i class="fa fa-edit"></i></a></td> 
        <td><button class="btn btn-danger delme" id=' . $row['id'] . '"><i class="fa fa-trash"></i></button></td>      




                                        
    </tr>';
    }
}

function bene()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM core_beneficiaries ORDER BY id DESC ');
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');

    while ($row = mysqli_fetch_array($u)) {
        // $y = mysqli_query($conn, 'SELECT * FROM transactions WHERE uid = ' . $row['id'] . ' ');

        // $row2 = mysqli_fetch_array($y);
        echo '<tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['name'] . '</td>
        <td> <span class="js-lists-values-employee-name">' . $row['contact'] . '</span></td>
        
        
        <td><span class="js-lists-values-employee-title">' . $row['image'] . '</span></td>
        
        
        <td><a class="btn btn-primary" href="update_user.php?id=' . $row['id'] . '"><i class="fa fa-edit"></i></a></td> 
        <td><button class="btn btn-danger delme" id=' . $row['id'] . '"><i class="fa fa-trash"></i></button></td>      




                                        
    </tr>';
    }
}



function paymentregistered()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM members ORDER BY id DESC ');
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');

    while ($row = mysqli_fetch_array($u)) {
        $y = mysqli_query($conn, 'SELECT * FROM transactions WHERE uid = ' . $row['id'] . ' ');

        $row2 = mysqli_fetch_array($y);
        echo '<tr>
        <td>' . $row['id'] . '</td>

        <td>

            <span class="js-lists-values-employee-name">' . $row['name'] . '</span>

        </td>

        <td>' . $row['email'] . '</td>
        <td>' . $row['contact'] . '</td>
        <td><span class="js-lists-values-employee-title">' . $row['region'] . '</span></td>
        <td><span class="js-lists-values-employee-district">' . $row['district'] . '</span>
        <td>' . $row['tdate'] . '</td>
        <td><span class="js-lists-values-employee-paid">' . $row['paystatus'] . '</span></td> ';
        if (isset($row2['dateadded'])) {
            echo '<td>' . $row2['dateadded'] . '</td>';
        } else {
            echo '<td></td>';
        }
        echo '
        <td>' . $row['points'] . '</td>
        <td>' . $row['confirm'] . '</td>
        <td>' . $row['enroll'] . '</td>


        <td>' . $row['ntcemailpost'] . '</td>

 
        <td>' . $row['attendance'] . '</td>


        <td>' . $row['dateadded'] . '</td>
        <td><button class="btn btn-success payme" id="' . $row['id'] . '"><i class="fa fa-money-bill"></i></button></td>      

        




                                        
    </tr>';
    }
}


function assistregistered()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM members ORDER BY id DESC ');
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');

    while ($row = mysqli_fetch_array($u)) {
        $y = mysqli_query($conn, 'SELECT * FROM transactions WHERE uid = ' . $row['id'] . ' ');

        $row2 = mysqli_fetch_array($y);
        echo '<tr>
        <td>' . $row['id'] . '</td>

        <td>

            <span class="js-lists-values-employee-name">' . $row['name'] . '</span>

        </td>

        <td>' . $row['email'] . '</td>
        <td>' . $row['contact'] . '</td>
        <td><span class="js-lists-values-employee-title">' . $row['region'] . '</span></td>
        <td><span class="js-lists-values-employee-district">' . $row['district'] . '</span>
        <td><span class="js-lists-values-employee-district">' . $row['modality'] . '</span>
        <td>' . $row['tdate'] . '</td>
        <td><span class="js-lists-values-employee-paid">' . $row['paystatus'] . '</span></td> ';
        if (isset($row2['dateadded'])) {
            echo '<td>' . $row2['dateadded'] . '</td>';
        } else {
            echo '<td></td>';
        }
        echo '
        <td>' . $row['points'] . '</td>
        <td>' . $row['confirm'] . '</td>
        <td>' . $row['enroll'] . '</td>


        <td>' . $row['ntcemailpost'] . '</td>

 
        <td>' . $row['attendance'] . '</td>


        <td>' . $row['dateadded'] . '</td>
        <td><button class="btn btn-info attend" id="' . $row['id'] . '"><i class="fa fa-info"></i></button></td>      


        <td><button class="btn btn-danger delme" id=' . $row['id'] . '"><i class="fa fa-trash"></i></button></td>      




                                        
    </tr>';
    }
}

function paidmembers()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM members WHERE paystatus="paid" ORDER BY id DESC ');
    while ($row = mysqli_fetch_array($u)) {
        echo '<tr>

        <td>

            <span class="js-lists-values-employee-name">' . $row['name'] . '</span>

        </td>

        <td>' . $row['email'] . '</td>
        <td>' . $row['contact'] . '</td>
        <td><span class="js-lists-values-employee-title">' . $row['region'] . '</span></td>
        <td><span class="js-lists-values-employee-district">' . $row['district'] . '</span>
        <td>' . $row['tdate'] . '</td>
        <td>' . $row['lincesed'] . '</td>
        <td>' . $row['nameofschool'] . '</td>
        <td><span class="js-lists-values-employee-paid">' . $row['paystatus'] . '</span></td>  
        <td>' . $row['ntcemailpost'] . '</td>
        <td>' . $row['dateadded'] . '</td>
        <td><a class="btn btn-success" href="update_user.php?id=' . $row['id'] . '"><i class="fa fa-edit"></i></a></td>      
        <td><a class="btn btn-danger" href="delete_user.php?id=' . $row['id'] . '"><i class="fa fa-trash"></i></a></td>      



                                        
    </tr>';
    }
}

function trans()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM transactions ');
    // echo '<td>'.$u.'</td>'
    while ($row = mysqli_fetch_array($u)) {
        $uid = $row['uid'];
        $us = mysqli_query($conn, "SELECT * FROM members WHERE id = '$uid'");
        $rr = mysqli_fetch_array($us);
        echo '<tr>

        <td>

            <span class="js-lists-values-employee-trans">' . $rr['name'] . '</span>

        </td>

        
        <td>' . $rr['contact'] . '</td>



        <td>' . $row['transid'] . '</td>
        <td>' . $row['amount'] . '</td>
        <td>' . $row['dateadded'] . '</td>
        
    </tr>';
    }
}

function countmembers()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM core_account');
    $amount = 0;
    while ($row = mysqli_fetch_array($c)) {
        $amount = $amount + $row['amount'];
        // $count = $c['amount'];



    }
    // $amount = 0;
    // $amount = $amount + $c['amount'];
    // $count = $c['amount'];
    // $count = mysqli_num_rows($c);

    echo  'GH₵ ' . $amount;
}

function countmembers_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene'");
    $amount = 0;
    while ($row = mysqli_fetch_array($c)) {
        $amount = $amount + $row['amount'];
        // $count = $c['amount'];
    }
    // $amount = 0;
    // $amount = $amount + $c['amount'];
    // $count = $c['amount'];
    // $count = mysqli_num_rows($c);

    echo  'GH₵ ' . $amount;
}



function showdonors()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM core_account ORDER BY  pay_date DESC');

    while ($row = mysqli_fetch_array($c)) {

        echo '<div class="border border-light p-3 rounded mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="font-18 mb-1">' . $row['donor_name'] . '</p>
                                            
                                        </div>
                                        <div>
                                            <p class="font-18 mb-1">' . $row['staff_name'] . '</p>
                                            
                                        </div>
                                        <p class="text-success my-0"> ' . $row['currency'] . ' ' . $row['amount'] . '</p>

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


function showdonors_spec($bene)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM core_account WHERE beneficiary_name = '$bene' ORDER BY  pay_date DESC");

    while ($row = mysqli_fetch_array($c)) {

        echo '<div class="border border-light p-3 rounded mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="font-18 mb-1">' . $row['donor_name'] . '</p>
                                            
                                        </div>
                                        <div>
                                            <p class="font-18 mb-1">' . $row['staff_name'] . '</p>
                                            
                                        </div>
                                        <p class="text-success my-0"> ' . $row['currency'] . ' ' . $row['amount'] . '</p>

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
function transactionstotal()
{
    // session_start();
    $id = $_SESSION['id'];
    include 'starter.php';

    $u = mysqli_query($conn, 'SELECT * FROM members ORDER BY id DESC ');
    // $y = mysqli_query($conn, 'SELECT * FROM transactions ORDER BY uid DESC ');

    $amount = 0;
    while ($row = mysqli_fetch_array($u)) {
        $y = mysqli_query($conn, "SELECT * FROM  transactions WHERE uid = '$id'");


        while ($row2 = mysqli_fetch_array($y)) {

            // echo $id;
            // echo $row2['uid'];
            // echo $row['id'];

            if ($row2['uid'] == $row['id']) {

                $amount = $amount + $row2['amount'];
            }
        }
    }

    return $amount;
}


function associate()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Associate"');
    $count3 = mysqli_num_rows($c);
    echo $count3;
}

function passociate()
{
    include 'starter.php';
    // $c = mysqli_query($conn, 'SELECT * FROM members WHERE confirm="confirmed"');
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Associate"');

    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members');
    $count2 = mysqli_num_rows($c2);
    // echo '('.(number_format((float)$count / $count2, '.', '')) * 100 .'%)';

    echo '(' . round(($count / $count2) * 100, 2) . '%)';
}


function pcertified()
{
    include 'starter.php';
    // $c = mysqli_query($conn, 'SELECT * FROM members WHERE confirm="confirmed"');
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Certificated"');

    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members');
    $count2 = mysqli_num_rows($c2);
    // echo '('.(number_format((float)$count / $count2, '.', '')) * 100 .'%)';

    echo '(' . round(($count / $count2) * 100, 2) . '%)';
}


function pstudents()
{
    include 'starter.php';
    // $c = mysqli_query($conn, 'SELECT * FROM members WHERE confirm="confirmed"');
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Student"');

    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members');
    $count2 = mysqli_num_rows($c2);
    // echo '('.(number_format((float)$count / $count2, '.', '')) * 100 .'%)';

    echo '(' . round(($count / $count2) * 100, 2) . '%)';
}


function students()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Student"');
    $count3 = mysqli_num_rows($c);
    echo $count3;
}



function certified()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Certificated"');
    $count3 = mysqli_num_rows($c);
    echo $count3;
}

function paidcertified()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Certificated" AND paystatus="paid"');
    $count3 = mysqli_num_rows($c);
    echo $count3;
}


function paidassociate()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Associate" AND paystatus="paid"');
    $count3 = mysqli_num_rows($c);
    echo $count3;
}


function paidstudents()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Student" AND paystatus="paid"');
    $count3 = mysqli_num_rows($c);
    echo $count3;
}



function ppaidcertified()
{
    include 'starter.php';
    // $c = mysqli_query($conn, 'SELECT * FROM members WHERE confirm="confirmed"');
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Certificated" AND paystatus="paid"');

    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Certificated"');
    $count2 = mysqli_num_rows($c2);
    // echo '('.(number_format((float)$count / $count2, '.', '')) * 100 .'%)';

    echo '(' . round(($count / $count2) * 100, 2) . '%)';
}


function ppaidassociate()
{
    include 'starter.php';
    // $c = mysqli_query($conn, 'SELECT * FROM members WHERE confirm="confirmed"');
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Associate" AND paystatus="paid"');

    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Associate"');
    $count2 = mysqli_num_rows($c2);
    // echo '('.(number_format((float)$count / $count2, '.', '')) * 100 .'%)';

    echo '(' . round(($count / $count2) * 100, 2) . '%)';
}

function ppaidstudent()
{
    include 'starter.php';
    // $c = mysqli_query($conn, 'SELECT * FROM members WHERE confirm="confirmed"');
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Student" AND paystatus="paid"');

    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members WHERE membership = "Student"');
    $count2 = mysqli_num_rows($c2);
    // echo '('.(number_format((float)$count / $count2, '.', '')) * 100 .'%)';

    echo '(' . round(($count / $count2) * 100, 2) . '%)';
}

function attendedmembers()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE attendance="Yes"');
    $count3 = mysqli_num_rows($c);
    echo $count3;
}

function confirmedmembers()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE confirm="confirmed"');
    $count3 = mysqli_num_rows($c);
    echo $count3;
}

function unconfirmedmembers()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE confirm="confirmed"');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members');
    $count2 = mysqli_num_rows($c2);
    echo $count2 - $count;
}

function cpercentage()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE confirm="confirmed"');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members');
    $count2 = mysqli_num_rows($c2);
    // echo '('.(number_format((float)$count / $count2, '.', '')) * 100 .'%)';

    echo '(' . round(($count / $count2) * 100, 2) . '%)';
}

function ucpercentage()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE confirm="confirmed"');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members');
    $count2 = mysqli_num_rows($c2);

    $unc = $count2 - $count;
    echo '(' . round(($unc / $count2) * 100, 2) . '%)';
}

function countpaid()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM transactions');
    $count = mysqli_num_rows($c);
    echo $count;
}

function countpaidstatus()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE paystatus="paid"');
    $count = mysqli_num_rows($c);
    echo $count;
}

function total()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM transactions');
    $count = mysqli_num_rows($c);
    echo 'Gh¢ ' . $count * 70;
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


function unpaid()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE paystatus="paid"');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members');
    $count2 = mysqli_num_rows($c2);
    echo $count2 - $count;
}

function unpaidpercentage()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE paystatus="paid"');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members');
    $count2 = mysqli_num_rows($c2);
    $unp = $count2 - $count;
    echo '(' . round(($unp / $count2) * 100, 2) . '%)';
}


function percentage()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM transactions');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members');
    $count2 = mysqli_num_rows($c2);
    echo '(' . round(($count / $count2) * 100, 2) . '%)';
}

function percentagestatus()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM members WHERE paystatus="paid"');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM members');
    $count2 = mysqli_num_rows($c2);
    echo '(' . round(($count / $count2) * 100, 2) . '%)';
}

function pay($id, $membership)
{
    include 'starter.php';
    $transid  = uniqid('MOMO');
    $dateadded = date('jS F, Y');
    $p = mysqli_query($conn, 'UPDATE members SET paystatus = "paid", existing = "yes" WHERE id ="' . $id . '"');
    $q = mysqli_query($conn, "INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$id','$transid','$membership','$dateadded')");

    if ($p && $q) {
        echo 'payadded';
    } else {
        echo 'Failed to add payment';
    }
}

function payrenewal($id)
{
    include 'starter.php';
    $transid  = uniqid('MOMO');
    $dateadded = date('jS F, Y');
    $p = mysqli_query($conn, 'UPDATE members SET paystatus = "paid" WHERE id ="' . $id . '"');
    $q = mysqli_query($conn, "INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$id','$transid','150','$dateadded')");

    if ($p && $q) {
        echo 'payadded';
    } else {
        echo 'Failed to add payment';
    }
}


function attend($id)
{
    include 'starter.php';
    // $transid  = uniqid('MOMO');
    // $dateadded = date('jS F, Y');
    $p = mysqli_query($conn, 'UPDATE members SET attendance = "Yes" WHERE id ="' . $id . '"');
    // $q = mysqli_query($conn, "INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$id','$transid','70','$dateadded')");

    if ($p) {
        echo 'attended';
    } else {
        echo 'Failed to add payment';
    }
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
