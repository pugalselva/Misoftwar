<div class="container mt-4">
        <h2 class="text-center text-primary mb-4"> Student Registration</h2>
        <form id="registrationForm" action="action.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="studentid" value="<?php echo $student_data['id']; ?>" />
            <div class="row">
                <!-- Name -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="name" name="name" value = "<?php echo $student_data['name']; ?>"
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
                                required value = "<?php echo $student_data['phone']; ?>">
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
                            <!-- <input type="radio" id="male" name="gender" value="Male" required> -->
                            <input type="radio" id="male" name="gender" value="Male" <?php if ($student_data['gender'] == 'Male') {
                    echo 'checked';
                } ?> />
                            <label for="male"> Male</label>
                            <!-- <input type="radio" id="female" name="gender" value="Female" required> -->
                            <input type="radio" id="female" name="gender" value="Female" <?php if ($student_data['gender'] == 'Female') {
                    echo 'checked';
                } ?> />
                            <label for="female"> Female</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $student_data['dob']; ?>" >
                        </div>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email" value = "<?php echo $student_data['email']; ?>" >
                </div>
            </div>

            <!-- Address -->
            <div class="form-group">
                <label class="form-label"> Address</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                            <input type="text" class="form-control" name="door_no" placeholder="Door No" value="<?php echo $student_data['door_no']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text"><i class="fa fa-road"></i></span>
                            <input type="text" class="form-control" name="street" placeholder="Street" value="<?php echo $student_data['street']; ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <!-- <span class="input-group-text"><i class='fas fa-map-marked-alt'></i></span> -->
                            <input type="text" class="form-control" name="district" placeholder="District"
                            value = "<?php echo $student_data['district']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text"><i class="fa fa-flag"></i></span>
                            <input type="text" class="form-control" name="state" placeholder="State"  value = "<?php echo $student_data['state']; ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <span class="input-group-text"><i class="fa fa-globe"></i></span>
                            <input type="text" class="form-control" name="country" placeholder="Country"
                            value = "<?php echo $student_data['country']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-2">
                            <!-- <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span> -->
                            <input type="text" class="form-control" name="pincode" placeholder="Pincode"
                            value = "<?php echo $student_data['pincode']; ?>">
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
                        <input type="text" class="form-control" name="qualification" value = "<?php echo $student_data['qualification']; ?>">
                    </div>
                </div>

                <!-- Technology -->
                <div class="form-group">
                    <label for="technology" class="form-label">Technology</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-code"></i></span>
                        <input type="text" class="form-control" id="technology" name="technology" value = "<?php echo $student_data['technology']; ?>">
                    </div>
                </div>
            </div>

            <!-- Skills -->
            <div class="form-group">
                <label class="form-label">Skills</label>
                <div>
                    <input type="checkbox" id="mern" name="skills[]" value="MERN"<?php if ($student_data['skills'] == 'MERN') {
                        echo 'checked';
                    } ?>>
                    <label for="mern"> MERN</label>
                    <input type="checkbox" id="dotnet" name="skills[]" value="DOTNET" <?php if ($student_data['skills'] == 'DOTNET') {
                        echo 'checked';
                    } ?>>
                    <label for="dotnet"> DOTNET</label>
                    <input type="checkbox" id="java" name="skills[]" value="JAVA" <?php if ($student_data['skills'] == 'JAVA') {
                        echo 'checked';
                    } ?>>
                    <label for="java"> JAVA</label>
                    <input type="checkbox" id="python" name="skills[]" value="PYTHON " <?php if ($student_data['skills'] == 'PYTHON') {
                        echo 'checked';
                    } ?>>
                    <label for="python"> Python</label>
                </div>
            </div>

            <!-- Certifications -->
            <div class="form-group">
                <label for="certification" class="form-label">Certification Done</label>
                <input type="text" class="form-control" name="certification" value = "<?php echo $student_data['certification']; ?>">
            </div>

            <div class="row">
                <!-- Experience -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="experience" class="form-label">Years of Experience</label>
                        <input type="number" class="form-control" name="experience" value = "<?php echo $student_data['experience']; ?>">
                    </div>
                </div>

                <!-- CTC -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ctc" class="form-label">Current CTC</label>
                        <input type="number" class="form-control" id="ctc" name="ctc" value = "<?php echo $student_data['ctc']; ?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="expectedCtc" class="form-label">Expected CTC</label>
                        <input type="number" class="form-control"id="expectedCtc" name="expected_ctc" value = "<?php echo $student_data['expected_ctc']; ?>">
                    </div>
                </div>
            </div>

            <!-- Language -->
            <div class="form-group">
                <label for="language" class="form-label">Languages</label>
                <input type="text" class="form-control" id="language" name="language" value = "<?php echo $student_data['language']; ?>">
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
                    <button type="submit" class="btn btn-primary btn-lg w-100" name="btn_stu_upda">
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