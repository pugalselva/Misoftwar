<?php
// include "./session.php";

include "db.php";
$obj = new DB();

$data = $obj->read_student();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SLA Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="viewstudent.css" />
    <style>
    
      </style>
  </head>
  <body>
  <header>
      <div class="menu">
        <div class="logo"><a href="./home.php">SLA Institution</a></div>
        <nav>
          <ul>
           
              <a href="./student_reg.php">Student Registration</a>
          
            
              <a href="./companyreq.php">Company Requirements</a>
             
            
            
              <a href="./interview.php">Interview Schedule</a>
              
            
            <li class="dropdown">
              <a href="#">Report</a>
              <div class="dropdown-content">
              <a href="./viewstudent.php">View Student Details</a>
              <a href="./viewcompany.php">View Company Requirements</a>
                <a href="./viewinterview.php">View Interview Schedule</a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="user dropdown">
          <span class="user-icon">👤</span> User Name
          <div class="dropdown-content">
            <a href="./logout.php">Logout</a>
          </div>
        </div>
      </div>
    </header>

    <main>
      <div class="search-container">
        <h1>Search Student Data</h1>
        <input type="text" placeholder="Student ID or Name" />
        <button>Search</button>
      </div>
     
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>Student ID</th>
              <th>Name</th>
              <th>Phone Number</th>
              <th>Gender</th>
              <th>Email</th>
              <th style="width:500px">Address</th>
              
              <th>D.O.B</th>
              <th>Qualification</th>
              <th>Technology</th>
              <th>Skills</th>
              <th>Certification Done</th>
              <th>Experience (Years)</th>
              <th>Current CTC</th>
              <th>Expected CTC</th>
              <th>Language Required</th>
              <th>Uploaded File</th>
              <th> Profile PIc </th>
              <th>EDIT</th>
              <th>Delete</th>
              <th>ID CARD</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $student_data){  ?>
            <tr>
              <td >SLA<?=substr($student_data['name'],0,3)."".$student_data['skills']."".$student_data['id'] ?></td>
              <td><?= $student_data['name'] ?></td>
              <td><?= $student_data['phone'] ?></td>
              <td><?= $student_data['gender'] ?></td>
              <td><?= $student_data['email'] ?></td>
              <td><?= $student_data['door_no']." ".$student_data['street']." ".$student_data['district']." ".$student_data['state']." ".$student_data['country']." ".$student_data['pincode'] ?></td>
              
              <td><?= $student_data['dob'] ?></td>
              <td><?= $student_data['qualification'] ?></td>
              <td><?= $student_data['technology'] ?></td>
              <td><?= $student_data['skills'] ?></td>
              <td><?= $student_data['certification'] ?></td>
              <td><?= $student_data['experience'] ?></td>
              <td><?= $student_data['ctc'] ?></td>
              <td><?= $student_data['expected_ctc'] ?></td>
              <td><?= $student_data['language'] ?></td>
              <td><?php if($student_data['resume_path']){?><a href="uploads/<?= $student_data['resume_path'] ?>" download><?= $student_data['resume_path'] ?> Download</a><?php }?></td>
              <td><?php if($student_data['pic_path']){?><a href="profile_pic/<?= $student_data['pic_path'] ?>" download><?= $student_data['pic_path'] ?> Download</a><?php }?></td>
              <td><a href="./student_edit.php?studentid=<?php echo $student_data['id'] ?>"> EDIT </a></td>
              <td><a href="./delete.php?studentid=<?php echo $student_data['id'] ?>"> DELETE </a></td>
              <td><a href="./invoice.php?studentid=<?php echo $student_data['id'] ?>"> view ID </a></td>
            </tr>
            <?php  } ?>
          </tbody>
        </table>
      </div>
      <a href="./student_reg.php"><input type="button" value="+New User"></a>
        
    </main>

  </body>
  
  <footer>
      <p>&copy; 2025 SLA Institution</p>
    </footer>
</html>
