<?php
//include "./session.php";
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css" />
    <link rel="stylesheet" href="studentreg.css" />
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
    <div class="container">
      <h1>Student Registration Form</h1>
      <form id="registrationForm" action="action.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Name</label>
          <input
            type="text"
            id="name"
            name="name"
            
            required
 oninput="validateName()"
            placeholder="Please enter uppercase letters only"
          />
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input
            type="tel"
            id="phone"
            name="phone"
            maxlength="10"
            oninput="validatePhoneNumber()"
            required
            
            placeholder="Please enter a valid 10-digit phone number"
          />
        </div>

        <div class="form-group">
          <label>Gender</label>
          <input type="radio" id="male" name="gender" value="Male"  />
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="Female" />
          <label for="female">Female</label>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email"  />
        </div>
         <div class=address>
        <div class="form-group">
          <label class="fg-label">Address</label>
          <input class="door" type="text" name="door_no" placeholder="Door No"  />
          <input class="street" type="text" name="street" placeholder="Street"  />
          <input class="district" type="text" name="district" placeholder="District"  />
          <input class="state" type="text" name="state" placeholder="State"  />
          <input class="country" type="text" name="country" placeholder="Country"  />
          <input class="pincode" type="text" name="pincode" placeholder="Pincode"   />
        </div></div>

        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" name="dob"  />
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
          <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
          <script>
            flatpickr("#dob", { maxDate: "today" });
          </script>
        </div>

        <div class="form-group">
          <label for="qualification">Qualification</label>
          <input type="text" id="qualification" name="qualification"  />
        </div>

        <div class="form-group">
          <label for="technology">Technology</label>
          <input type="text" id="technology" name="technology"  />
        </div>

        <div class="form-group">
          <label>Skills</label>
          <div>
            <input type="checkbox" id="mern" name="skills[]" value="MERN" />
            <label for="mern">MERN</label>
            <input type="checkbox" id="dotnet" name="skills[]" value="DOTNET" />
            <label for="dotnet">DOTNET</label>
            <input type="checkbox" id="java" name="skills[]" value="JAVA" />
            <label for="java">JAVA</label>
            <input type="checkbox" id="python" name="skills[]" value="PYTHON" />
            <label for="python">PYTHON</label>
            <input type="checkbox" id="sql" name="skills[]" value="SQL" />
            <label for="sql">SQL</label>
          </div>
        </div>

        <div class="form-group">
          <label for="certification">Certification Done</label>
          <input type="text" id="certification" name="certification"  />
        </div>

        <div class="form-group">
          <label for="experience">Years of Experience</label>
          <input type="number" id="experience" name="experience"  />
        </div>

        <div class="form-group">
          <label for="ctc">Current CTC</label>
          <input type="number" id="ctc" name="ctc"  />
        </div>

        <div class="form-group">
          <label for="expectedCtc">Expected CTC</label>
          <input type="number" id="expectedCtc" name="expected_ctc"  />
        </div>

        <div class="form-group">
          <label for="language">Language </label>
          <input type="text" id="language" name="language"  />
        </div>

        <div class="form-group">
          <label for="resume">Upload Resume</label>
          <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx,.png,.jpeg,.jpg"  />
        </div>

        <div class="form-group">
          <label for="profile_pic">Upload Profile Photo</label>
          <input type="file" id="resume" name="profile_pic" accept=".pdf,.doc,.docx,.png,.jpeg,.jpg"  />
        </div>

        <input type="submit" value="Submit" name="btn_stu_submit">
</form>
    </div>
  </body>
</html>