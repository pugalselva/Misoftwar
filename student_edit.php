<?php
// include "./session.php";

include "./db.php";
$obj= new DB();
$student_data = $obj->student_get($_GET['studentid']);
//var_dump($student_data);
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
         <input type="hidden" name="studentid" value="<?php echo $student_data['id'] ?>"/>
        <div class="form-group">
          <label for="name">Name</label>
          <input
            type="text"
            id="name"
            name="name"  
            required
 oninput="validateName()"          
            value = "<?php echo $student_data['name'] ?>"
            placeholder="Please enter uppercase letters only"/>
          
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
            
            value = "<?php echo $student_data['phone'] ?>"
            placeholder="Please enter a valid 10-digit phone number"/>
        </div>

        <div class="form-group">
          <label>Gender</label>
          <input type="radio" id="male" name="gender" value="Male" <?php if( $student_data['gender']=="Male") {echo 'checked';}?> />
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="Female"  <?php if( $student_data['gender']=="Female") {echo 'checked';}?>/>
          <label for="female">Female</label>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value = "<?php echo $student_data['email'] ?>" />
        </div>

        <div class="form-group">
          <label>Address</label>
          <input type="text" name="door_no" placeholder="Door No"value = "<?php echo $student_data['door_no'] ?>"  />
          <input type="text" name="street" placeholder="Street"value = "<?php echo $student_data['street'] ?>"  />
          <input type="text" name="district" placeholder="District" value = "<?php echo $student_data['district'] ?>" />
          <input type="text" name="state" placeholder="State" value = "<?php echo $student_data['state'] ?>" />
          <input type="text" name="country" placeholder="Country" value = "<?php echo $student_data['country'] ?>" />
          <input type="text" name="pincode" placeholder="Pincode"  value = "<?php echo $student_data['pincode'] ?>" />
        </div>

        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" name="dob"value = "<?php echo $student_data['dob'] ?>"  />
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
          <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
          <script>
            flatpickr("#dob", { maxDate: "today" });
          </script>
        </div>

        <div class="form-group">
          <label for="qualification">Qualification</label>
          <input type="text" id="qualification" name="qualification" value = "<?php echo $student_data['qualification'] ?>" />
        </div>

        <div class="form-group">
          <label for="technology">Technology</label>
          <input type="text" id="technology" name="technology" value = "<?php echo $student_data['technology'] ?>" />
        </div>

        <div class="form-group">
          <label>Skills</label>
          <div>
            <input type="checkbox" id="mern" name="skills[]" value="MERN"<?php if($student_data['skills']=="MERN") { echo 'checked';}?> />
            <label for="mern">MERN</label>
            <input type="checkbox" id="dotnet" name="skills[]" value="DOTNET" <?php if($student_data['skills']=="DOTNET") { echo 'checked';}?> />
            <label for="dotnet">DOTNET</label>
            <input type="checkbox" id="java" name="skills[]" value="JAVA" <?php if($student_data['skills']=="JAVA") { echo 'checked';}?>/>
            <label for="java">JAVA</label>
            <input type="checkbox" id="python" name="skills[]" value="PYTHON" <?php if($student_data['skills']=="PYTHON") { echo 'checked';}?>/>
            <label for="python">PYTHON</label>
            <input type="checkbox" id="sql" name="skills[]" value="SQL" <?php if($student_data['skills']=="SQL") { echo 'checked';}?>/>
            <label for="sql">SQL</label>
          </div>
        </div>

        <div class="form-group">
          <label for="certification">Certification Done</label>
          <input type="text" id="certification" name="certification" value = "<?php echo $student_data['certification'] ?>" />
        </div>

        <div class="form-group">
          <label for="experience">Years of Experience</label>
          <input type="number" id="experience" name="experience" value = "<?php echo $student_data['experience'] ?>" />
        </div>

        <div class="form-group">
          <label for="ctc">Current CTC</label>
          <input type="number" id="ctc" name="ctc"  value = "<?php echo $student_data['ctc'] ?>"/>
        </div>

        <div class="form-group">
          <label for="expectedCtc">Expected CTC</label>
          <input type="number" id="expectedCtc" name="expected_ctc"  value = "<?php echo $student_data['expected_ctc'] ?>"/>
        </div>

        <div class="form-group">
          <label for="language">Language </label>
          <input type="text" id="language" name="language"  value = "<?php echo $student_data['language'] ?>"/>
        </div>

        <div class="form-group">
          <label for="resume">Upload Profile Photo</label>
          <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx,.png,.jpeg"  />
        </div>

        <div class="form-group">
          <label for="resume">Upload Resume</label>
          <input type="file" id="" name="profile_pic" accept=".pdf,.doc,.docx,.png,.jpeg,.jpg"  />
        </div>

        <input type="submit" value="Update" name="btn_stu_update">
</form>
    </div>
  </body>
</html>