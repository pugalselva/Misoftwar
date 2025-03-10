<?php

include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misoftware Solutions LLP</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/mi logo1.png" type="image/png">

    <!--====== studentform css ======-->
    <link rel="stylesheet" href="../css/studentReg.css" />

    <!-- Including Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Including Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Including Flatpickr for date picker functionality -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f9;
        }

        .container {
            max-width: 900px;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn-primary {
            background: #007bff;
            border: none;
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .input-group-text {
            background-color: #007bff;
            color: white;
            border: none;
        }
    </style>
    <script>
        function validatePhoneNumber() {
            const phoneInput = document.getElementById("phone");
            let phoneValue = phoneInput.value;

            phoneValue = phoneValue.replace(/\D/g, "");

            if (phoneValue.length > 10) {
                phoneValue = phoneValue.slice(0, 10);
            }

            phoneInput.value = phoneValue;
        }

        function validateName() {
            const nameInput = document.getElementById("name");
            let nameValue = nameInput.value;

            nameValue = nameValue.toUpperCase();

            nameValue = nameValue.replace(/[^A-Z\s]/g, "");

            nameInput.value = nameValue;
        }
    </script>
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center text-primary mb-4"> Student Registration</h2>
        <form id="registrationForm" action="action.php" method="POST" enctype="multipart/form-data">

            <div class="row">
                <!-- Name -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Please enter uppercase letters only" oninput="validateName()" required>
                        </div>
                    </div>
                </div>

                <!-- Phone Number -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            <input type="tel" class="form-control" id="phone" name="phone" maxlength="10"
                                required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gender & Date of Birth -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <div>
                            <input type="radio" id="male" name="gender" value="Male" required>
                            <label for="male"> Male</label>
                            <input type="radio" id="female" name="gender" value="Female" required>
                            <label for="female"> Female</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <!-- Address -->
            <div class="form-group">
                <label class="form-label"> Address</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                            <input type="text" class="form-control" name="door_no" placeholder="Door No" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text"><i class="fa fa-road"></i></span>
                            <input type="text" class="form-control" name="street" placeholder="Street" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <!-- <span class="input-group-text"><i class='fas fa-map-marked-alt'></i></span> -->
                            <input type="text" class="form-control" name="district" placeholder="District"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text"><i class="fa fa-flag"></i></span>
                            <input type="text" class="form-control" name="state" placeholder="State" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text"><i class="fa fa-globe"></i></span>
                            <input type="text" class="form-control" name="country" placeholder="Country"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <!-- <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span> -->
                            <input type="text" class="form-control" name="pincode" placeholder="Pincode"
                                required>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <!-- Qualification -->
                <div class="form-group">
                    <label for="qualification" class="form-label">Qualification</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                        <input type="text" class="form-control" name="qualification" required>
                    </div>
                </div>

                <!-- Technology -->
                <div class="form-group">
                    <label for="technology" class="form-label">Technology</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-code"></i></span>
                        <input type="text" class="form-control" id="technology" name="technology">
                    </div>
                </div>
            </div>

            <!-- Skills -->
            <div class="form-group">
                <label class="form-label">Skills</label>
                <div>
                    <input type="checkbox" id="mern" name="skills[]" value="MERN">
                    <label for="mern"> MERN</label>
                    <input type="checkbox" id="dotnet" name="skills[]" value="DOTNET">
                    <label for="dotnet"> DOTNET</label>
                    <input type="checkbox" id="java" name="skills[]" value="JAVA">
                    <label for="java"> JAVA</label>
                    <input type="checkbox" id="python" name="skills[]" value="PYTHON ">
                    <label for="python"> Python</label>
                </div>
            </div>

            <!-- Certifications -->
            <div class="form-group">
                <label for="certification" class="form-label">Certification Done</label>
                <input type="text" class="form-control" name="certification">
            </div>

            <div class="row">
                <!-- Experience -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="experience" class="form-label">Years of Experience</label>
                        <input type="number" class="form-control" name="experience">
                    </div>
                </div>

                <!-- CTC -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ctc" class="form-label">Current CTC</label>
                        <input type="number" class="form-control" id="ctc" name="ctc">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="expectedCtc" class="form-label">Expected CTC</label>
                        <input type="number" class="form-control"id="expectedCtc" name="expected_ctc">
                    </div>
                </div>
            </div>

            <!-- Language -->
            <div class="form-group">
                <label for="language" class="form-label">Languages</label>
                <input type="text" class="form-control" id="language" name="language">
            </div>

            <!-- Resume Upload -->
            <div class="form-group">
                <label for="resume" class="form-label">Upload Resume</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-upload" aria-hidden="true"></i></span>
                    <input type="file" class="form-control" id="resume" name="resume"
                        accept=".pdf,.doc,.docx,.png,.jpeg,.jpg">
                </div>
            </div>

            <!-- Profile Picture Upload -->
            <div class="form-group">
                <label for="profile_pic" class="form-label">Upload Profile Photo</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-camera"></i></span>
                    <input type="file" class="form-control" id="profile_pic" name="profile_pic"
                        accept=".pdf,.doc,.docx,.png,.jpeg,.jpg">
                </div>
            </div>

            <br>
            <!-- <div class="input-group">
                <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_stu_submit">

            </div> -->
            <div class="row">
                <!-- Submit Button -->
                <div class="col-md-6 mb-2">
                    <button type="submit" class="btn btn-primary btn-lg w-100" name="btn_stu_submit">
                        <i class="fa fa-paper-plane"></i> Submit
                    </button>
                </div>

                <!-- Back Button -->
                <div class="col-md-6 mb-2">
                    <a href="admin_dashboard.php" class="btn btn-secondary btn-lg w-100">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>


        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> -->
    <script>
        flatpickr("#dob", {
            maxDate: "today"
        });
    </script>
</body>

</html>
