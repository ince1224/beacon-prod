<?php
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fill The Form</title>
<link href="table.css" type="text/css" rel="stylesheet">
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
 <form name="aspnetForm" method="post" action="index0.php" id="myForm">
  <div class="top_banner">
    <div class="in_banner">
            <div class=" logo">
              <img alt="jee" src="images/nbsc.png"></div>
      <div class="banner_text">
        <h1>
                  NORTHER BUKIDNON STATE COLLEGE 
          </h1>
              <h2>
                   ALUMNI TRACKING SYSTEM
              </h2>
        </div>
      </div>
  </div>
    <div class="cleaner">
    </div>
    

        </div>
    </div>
    <div class="cleaner">
    </div>
    <div id="container">
       

    <center>
        <h2>
            <span id="lbltitle" style="font-weight:bold;">Fill up form</span>
        </h2>
        <div class="mid_box">
            <div class="mid-outer">
                <div class="mid-inner">
                    <div class="mid">
                        <div id="main">
    
         
                                        
                                        </div>
                                        <div id="UpdAddress">
                                                <table style="width:98%;" cellspacing="0" cellpadding="0">
                                                
                                                    <tbody><tr>
                                                        <td align="left">
                                                          <div class="form_tab">
                                                               General Information</div>
                                                            <fieldset>
                                                                <center>
                                                                <table cellspacing="5" cellpadding="4" width="100%">
                                                                        
                                                                    <table cellspacing="5" cellpadding="4" width="100%">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td align="right" width="45%">
                                                                               Student ID :
                                                                            </td>
                                                                            <td align="left" width="55%">
                                                                            <input name="Stud_id" type="text" maxlength="46" required>
                                                                            </td>
                                                                        </tr>
                                                                            <tr>
                                                                                
                                                                                <tr>
                                                                            <td align="right" width="45%">
                                                                               Name :
                                                                            </td>
                                                                            <td align="left" width="55%">
                                                                            <input name="first_name" type="text" maxlength="46" required>
                                                                            </td>
                                                                        </tr>
                                                                            <tr>
                                                                                
                                                                                <tr>
                                                                            <td align="right" width="45%">
                                                                               Last Name :
                                                                            </td>
                                                                            <td align="left" width="55%">
                                                                            <input name="last_name" type="text" maxlength="46" required>
                                                                            </td>
                                                                        
                                                                            <tr>
                                                                            <td align="right" width="45%">
                                                                              Email Address :
                                                                            </td>
                                                                            <td align="left" width="55%">
                                                                            <input name="eaddress" type="text" maxlength="46" required>
                                                                            </td>
                                                                            </tr>
                                                                            
                                                                                
                                                                            <tr>
                                                                              <td align="right" width="45%">
                                                                                Date of Birth :
                                                                            </td>
                                                                            <td align="left" width="55%">
                                                                                <input type="date" name="dob" required>
                                                                            </td>
                                                                            </tr>
                                                                            </tr>
                                                                        
                                                                    </tbody>
                                                                    </table>
                                                                 
                                       
                                        <br>
                                        <center>
                                            <table cellspacing="0" width="80%" border="0">
                                                <tbody><tr>
                                                    <td align="center">
                                                        <button type="button" onclick="showmodal()" class="sub_red">Submit</button>
                                                        <button id="submitbtn" type="submit" hidden name="submit"></button>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </center>
                                    </td>
                                </tr>
                            </tbody></table>
                        <!-- Basic modal -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="basicModalLabel">Log In Successful</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Your log in was successful. Click "Proceed" to continue.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a onclick="$('#submitbtn').click()" class="btn btn-primary">Proceed</a>
            </div>
        </div>
    </div>
</div>
</div>

        </form>
        <!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // document.getElementById('myForm').addEventListener('submit', function (event) {
    //     event.preventDefault(); // Prevent default form submission behavior

    //     // Your code to process form data and check for success
    //     // For example, check if the form submission is successful
    //     var isFormSubmissionSuccessful = true;

    //     // If form submission is successful, show the desired modal
    //     if (isFormSubmissionSuccessful) {
            
    //         $('#basicModal').modal('show'); // Display the modal
    //        $("#errorModal").modal("show");
    //         $("#errorModal").modal("show")
    //     }

    // });
         var isFormSubmissionSuccessful = true;

    function showmodal(){

        // If form submission is successful, show the desired modal
        if (isFormSubmissionSuccessful) {
            
            $('#basicModal').modal('show'); // Display the modal
           $("#errorModal").modal("show");
            $("#errorModal").modal("show")
        }
    }
</script>
</body>
</html>
<?php
include('admin/dbcon.php');

if (isset($_POST['submit'])) {
    echo '<script>alert("q")</script>';
    $Stud_id = isset($_POST['Stud_id']) ? $_POST['Stud_id'] : '';
    $name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $lastname = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $eadd = isset($_POST['eaddress']) ? $_POST['eaddress'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';

    // Assuming $conn is your database connection
    $select_query = mysqli_query($conn, "SELECT * FROM `generalinfo` WHERE `Stud_id` = '$Stud_id'");

    if ($select_query) {
        if (mysqli_num_rows($select_query) > 0) {
            // Data matches, retrieve the existing data
            $row = mysqli_fetch_array($select_query);
            $retrievedfirst_name = $row['first_name'];
            $retrievedlast_name = $row['last_name'];
            $retrievedEmail = $row['email_address'];
            $retrievedDOB = $row['date_of_birth'];

            // Display success modal
            echo '<script>alert("Successful")</script>';

            
        } else {
            // Data doesn't match, display error modal
            echo '<script>alert("Error1")</script>';
        }
    } else {
        // Query error, display error modal
        echo '<script>alert("Error2")</script>';
    }
} else {
    // Handle the case where form is not submitted
    echo '<script>alert("w")</script>';
}
?>
