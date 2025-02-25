<?php
//include "./session.php";
include_once "./db.php";
$obj = new DB();
$user = $obj->student_get($_GET['studentid']);

//var_dump($user);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Details</title>
    <style>
      body {
        font-family: Arial, sans-serif;
       
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f4;
        margin: 0;
      }

      .table-container {
        width: 400px;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
      }

      h2 {
        color: #007bff;
        margin-bottom: 15px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 15px;
      }

      td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
      }

      .empty-cell {
        background-color: #f0f0f0;
        width: 60%;
      }
      .empty-cell img{
        width: 100px;
        height: 100px;
      }
    </style>
  </head>
  <body>
  <center>
    <div class="table-container">
      <h2>Student Details</h2>
      <table>
      <tr>
          
          <td colspan="2" class="empty-cell" >
              <center>            
            <img src="profile_pic/<?= $user['pic_path'] ?>"
              </center>
          </td>
        </tr>  
      <tr>
          <td><strong>Name:</strong></td>
          <td class="empty-cell" ><?= $user['name'] ?></td>
        </tr>
        <tr>
          <td><strong>Student ID:</strong></td>
          <td class="empty-cell">SLA<?=substr($user['name'],0,3)."".$user['skills']."".$user['id'] ?></td>
          
        </tr>
        <tr>
          <td><strong>Course:</strong></td>
          <td class="empty-cell"><?= $user['skills'] ?></td>
        </tr>
        <tr>
          <td><strong>Phone Number:</strong></td>
          <td class="empty-cell"><?= $user['phone'] ?></td>
        </tr>
        <tr>
          <td><strong>Email:</strong></td>
          <td class="empty-cell"><?= $user['email'] ?></td>
        </tr>
      </table>
    </div>
    <br>
       

<button onclick="window.print()">Download or Print</button>
    <br>   <br>
    <a href="./home.php"><input type="button" value="HOME"></a>
</center>
</body>
</html>