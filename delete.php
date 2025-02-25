<?php
// include "./session.php";


include_once "./db.php";
$obj = new DB();

if(isset($_GET['studentid']))
{
    $obj->student_delete($_GET['studentid']);
    header("Location: http://localhost/Misoftwar/viewstudent.php");
exit;
}