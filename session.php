<?php

//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['name,middlename,lastname']) || ($_SESSION['name,middlename,lastname'] == '')) {
    header("location: main.php");
    exit();
}

$session_id=$_POST['name,middlename,lastname'];
?>