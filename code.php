<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'dbalumni');

function redirectToAnotherPage($message, $page) {
    $_SESSION['status'] = $message;
    header("location: $page");
    exit;
}

if (isset($_POST['Login'])) {
    $Stud_id = isset($_POST['Stud_id']) ? $_POST['Stud_id'] : '';

    $select_query = "SELECT * FROM `generalinfo` WHERE `Stud_id` = '$Stud_id'";
    $select_query_run = mysqli_query($connection, $select_query);

    if ($select_query_run) {
        if (mysqli_num_rows($select_query_run) > 0) {
            // Data matches, retrieve the existing data
            $row = mysqli_fetch_array($select_query_run);
            $retrievedfirst_name = $row['first_name'];
            $retrievedlast_name = $row['last_name'];
            $retrievedEmail = $row['email_address'];
            $retrievedDOB = $row['date_of_birth'];

            // Call the function to redirect with message and destination page
            redirectToAnotherPage("Data Exists", "profile.php");
        } else {
            $_SESSION['status'] = "Data Not Exists"; // Set error message
            header('location: index.php');
            exit;
        }
    } else {
        $_SESSION['status'] = "Query Error"; // Set query error message
        header('location: index.php');
        exit;
    }
}
?>