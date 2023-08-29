<?php
include('admin/dbcon.php');

$conn = mysqli_connect('localhost', 'root', '', 'dbalumni') or die(mysqli_error());

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Stud_id = $_POST['Stud_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['birthdate'];
    $civil_status = $_POST['civil_status'];
    $gender = $_POST['gender'];
    $permanent_address = $_POST['permanent_address'];
    $region = $_POST['region'];
    $zipcode = $_POST['zipcode'];
    $telephone_number = $_POST['telephone_number'];

    $sql = "UPDATE generalinfo SET
                first_name='$first_name',
                middle_name='$middle_name',
                last_name='$last_name',
                date_of_birth='$date_of_birth',
                civil_status='$civil_status',
                gender='$gender',
                permanent_address='$permanent_address',
                region='$region',
                zipcode='$zipcode',
                telephone_number='$telephone_number'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Alumni updated successfully";
    } else {
        echo "Error updating alumni: " . $conn->error;
    }
} else {
    $Stud_id = $_GET['Stud_id'];
    $sql = "SELECT * FROM generalinfo WHERE Stud_id=$Stud_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Alumni not found.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Alumni</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>Update Alumni</h1>
    </div>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="hidden" name="Stud_id" value="<?php echo $Stud_id; ?>">

            <div class="name-fields">
                <div class="left-field">
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required>
                </div>
                <div class="right-field">
                    <label for="middle_name">Middle Name:</label>
                    <input type="text" name="middle_name" value="<?php echo $row['middlename']; ?>">
                </div>
            </div>

            <div class="name-fields">
                <div class="left-field">
                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required>
                </div>
                <div class="right-field">
                    <label for="birthdate">Birthdate:</label>
                    <input type="date" name="birthdate" value="<?php echo $row['date_of_birth']; ?>">
                </div>
            </div>

            <div class="name-fields">
                <div class="left-field">
                    <label for="civil_status">Civil Status:</label>
                    <input type="text" name="civil_status" value="<?php echo $row['civil_status']; ?>">
                </div>
                <div class="right-field">
                    <label>Gender:</label>
                    <div class="gender-buttons">
                        <label><input type="radio" name="gender" value="Male" <?php echo ($row['gender'] === 'Male') ? 'checked' : ''; ?>> Male</label>
                        <label><input type="radio" name="gender" value="Female" <?php echo ($row['gender'] === 'Female') ? 'checked' : ''; ?>> Female</label>
                    </div>
                </div>
            </div>

            <h2 class="contact-title">Contact Information</h2>

            <div class="contact-fields">
                <div class="left-field">
                    <label for="street_address">Permanent Address:</label>
                    <input type="text" name="permanent_address" value="<?php echo $row['permanent_address']; ?>">
                </div>
                <div class="right-field">
                    <label for="city">region:</label>
                    <input type="text" name="region" value="<?php echo $row['region']; ?>">
                </div>
            </div>

            <div class="contact-fields">
                <div class="left-field">
                    <label for="state_province_region">State/Province/Region:</label>
                    <input type="text" name="state_province_region" value="<?php echo $row['state_province_region']; ?>">
                </div>
                <div class="right-field">
                    <label for="zipcode">Zipcode:</label>
                    <input type="text" name="zipcode" value="<?php echo $row['zipcode']; ?>">
                </div>
            </div>

            <div class="contact-fields">
                <label for="contact_number">Telephone Number:</label>
                <input type="text" name="telephone_number" value="<?php echo $row['telephone_number']; ?>">
            </div>

            <div class="button-container">
                <input type="submit" value="Update Alumni" class="btn">
            </div>
        </form>
    </div>
</body>
</html>
