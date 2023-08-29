<?php
session_start();
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
                
                ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
                unset($_SESSION['status']);
            }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Step Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="profstyle.css" />
    </style>
    <style>
    /* Custom styles */
    .bg-dark-blue {
        background-color: #1a237e;
        /* Dark blue color */
    }
    </style>

</head>

<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="img/logov2_adobe_express.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="userLink" data-bs-toggle="modal"
                            data-bs-target="#userModal">User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!-- //NAVBAR -->

    <!-- User Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    </div><!-- //User Modal -->

    <div class="mb-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="stepForm">
                    <div class="step" id="step1">

                        <div class="mb-3 profile-picture">
                            <input type="file" name="profile_picture" id="file-input" style="display: none;">
                            <label for="file-input" class="profile-image-label">
                                <div class="profile-picture">
                                    <label for="file-input" class="profile-image-label">
                                        <div class="image-container">
                                            <img id="preview" src="#" alt="Edit Image">
                                        </div>
                                    </label>
                                </div>
                            </label>
                        </div>
                        <div class="center-container">
                            <span style="font-weight:bold;">Edit Your Profile</span>
                        </div>
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                        <div class="mb-3">
                            <label for="middleName" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="middleName" name="middleName">
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                        </div>
                        <div class="mb-3">
                            <label for="suffix" class="form-label">Suffix</label>
                            <input type="text" class="form-control" id="suffix" name="suffix">
                        </div>
                        <div class="mb-3">
                            <label for="birthdate" class="form-label">Birthdate</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                        </div>
                        <button class="btn btn-primary nextBtn" type="button">Next</button>
                    </div>

                    <div>
                        <div class="mb-3">
                        </div>
                        <div class="step d-none" id="step2">
                            <h3>YOUR MOST RECENT UP DEGREE/CERTIFICATE</h3>
                            <p>.</p>
                            <div class="mb-3">
                                <label for="firstName" class="form-label">CAMPUS*</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="mb-3">
                                <label for="middleName" class="form-label">College,School, or Institute</label>
                                <input type="text" class="form-control" id="middleName" name="middleName">
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Degree/Certificate & Major</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" required>
                            </div>
                            <div class="mb-3">
                                <label for="suffix" class="form-label">Year Started</label>
                                <input type="date" class="form-control" id="suffix" name="suffix">
                            </div>
                            <div class="mb-3">
                                <label for="birthdate" class="form-label">Year Graduated</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                                <div class="mb-3">
                                </div>
                                <button class="btn btn-secondary prevBtn" type="button">Previous</button>
                                <button class="btn btn-primary nextBtn" type="button">Next</button>
                            </div>

                            <div class="mb-3">
                            </div>
                        </div>
                        <div class="step d-none" id="step3">
                            <h3>CONTACT INFORMATION</h3>
                            <p></p>
                            <div class="mb-3">
                                <label for="firstName" class="form-label">Personal Email Address</label>
                                <input type="Email" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="mb-3">
                                <label for="firstName" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="mb-3">
                                <label for="firstName" class="form-label">Permanent Address</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="mb-3">
                                <label for="firstName" class="form-label">State/Provice/City</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="mb-3">
                                <label for="firstName" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>

                            <button class="btn btn-secondary prevBtn" type="button">Previous</button>
                            <button class="btn btn-success submitBtn" type="submit">Submit</button>
                        </div>
                    </div>
                    </label>
                </form>


                </dev>
            </div>
            <div class="mb-3">
            </div>
            <div class="mb-3">
            </div>
            <form>



            </form>
            <footer>
                <div class="footer-top">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <img class="logo" src="img/logo-white.svg" alt="">
                            </div>

                            </ul>
                        </div>
                        <div class="col-lg-2">
                            <h5 class="text-white">More</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h5 class="text-white">Contact</h5>
                            <ul class="list-unstyled">
                                <li>Address: NORTHERN BUKIDNON STATE COLLEGE, TANKULAN MANOLO FORTICH BUKIDNON</li>
                                <li>Email: NBSC.EDU.PH</li>
                                <li>Phone: (603) 555-0123</li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    </div>
    </footer>



    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Display preview of the selected profile picture
    const input = document.querySelector('input[type="file"]');
    const preview = document.getElementById('preview');
    input.addEventListener('change', function() {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = "#";
        }
    });
    header('Location: home.php');
    exit();
    </script>

    <script>
    $(document).ready(function() {
        var currentStep = 1;

        $('.nextBtn').click(function() {
            $('#step' + currentStep).addClass('d-none');
            currentStep++;
            $('#step' + currentStep).removeClass('d-none');
        });

        $('.prevBtn').click(function() {
            $('#step' + currentStep).addClass('d-none');
            currentStep--;
            $('#step' + currentStep).removeClass('d-none');
        });

        $('#stepForm').submit(function(e) {
            e.preventDefault();
            alert('Form submitted successfully!');
            // Add form submission logic here
        });
    });
    </script>

</body>

</html>