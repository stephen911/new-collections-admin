<?php

// require '../loader/autoloader.php';
require 'functions.php';
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'update':
            extract($_POST);
            // extract($_POST);

            updateuser($id, $name, $email, $tdate, $contact, $gender, $wnumber, $enumber, $address, $occupation, $mstatus, $region, $nationality, $edulevel, $area, $membership, $challenge, $color, $size, $school, $programme, $year);

            break;

        case 'updatestaff':
            extract($_POST);
            // extract($_POST);
            updatestaff($id, $name, $email, $contact, $bene, $event, $fname, $lname);
            break;

        case 'updatebene':
            extract($_POST);
            // extract($_POST);
            updatebene($id, $name, $contact, $tdate);
            break;

        case 'updaterate':
            extract($_POST);
            // extract($_POST);
            updaterate($id, $usd, $gbp, $eur, $cfa);
            break;

        case 'cfuser':
            extract($_POST);
            // extract($_POST);
            confirmuser($id, $confirmation);


            break;

        case 'spec':
            extract($_POST);
            // extract($_POST);
            foodstats($bene);

            break;

        case 'repo':
            extract($_POST);
            // extract($_POST);
            get_report($bene);

            break;
      

        case 'login':
            extract($_POST);
            login($email, $password);
            break;

        case 'bene':
            extract($_POST);
            register1($name, $contact, $tdate);
            break;

        case 'staff':
            extract($_POST);
            addstaff($name, $contact, $bene, $pin, $event, $fname, $lname);

            break;
        
        case 'rate':
            extract($_POST);
            addrate($usd, $gbp, $eur, $cfa);

            break;
        case 'event':
            extract($_POST);
            addevent($name);

            break;

        case 'bank':
            extract($_POST);
            addbank($name);

            break;

        case 'register':
            extract($_POST);
            if ($oname == '') {
                $name = $title . ' ' . $fname . ' ' . $lname;
            } else {
                $name = $title . ' ' . $fname . ' ' . $oname . ' ' . $lname;
            }
            if ($password != $repass) {
                echo 'Password do not match';
            } elseif ($fname == '' || $lname == '') {
                echo ' All field must be filled';
            } else {
                register($name, $title, $email, $tdate, $contact, $gender, $wnumber, $enumber, $address, $occupation, $mstatus, $region, $nationality, $edulevel, $area, $challenge, $color, $size, $student, $school, $programme, $year, $heard, $password);
            }

            break;

        case 'changepass':

            extract($_POST);
            if ($newpass != $repass) {
                echo 'Password do not match';
            } else {
                changepass($id, $password, $newpass);
            }
            break;

        

        case 'dele':
            extract($_POST);
            dele($id);
            break;

        default:

            break;
    }
}
