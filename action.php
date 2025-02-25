<?php
//include "./session.php";
include_once "db.php";

$obj = new DB();
if (isset($_POST['btn_stu_submit']) == true) {
  var_dump("came");
  try {
    //code...
    
    $obj->insert_students($_POST,$_FILES);
    
    //var_dump($obj);
  header("Location: http://localhost/Misoftwar/viewstudent.php");
exit;
  } catch (\Throwable $th) {
    //throw 
    echo $th;
  }
  
}
if (isset($_POST['btn_stu_update']) == true) {
  //var_dump("came");
  try {
    //code...
    
    $obj->edit_student($_POST,$_FILES);
    
  
  header("Location: http://localhost/php_test/codathon/practice/viewstudent.php");
exit;
  } catch (\Throwable $th) {
    //throw 
    echo $th;
  }
  
}
?>