 <?php
// Database connection configuration

$localhost = 'localhost';
$user = 'root';
$password = 'MYSQL70@pug';    
$database = 'enquiries_mi'; 

// Create connection
$conn = new mysqli($localhost, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

 
// class DB
// {
//     public function __construct()
//     {
//         $localhost = 'localhost';
//         $username = 'root';
//         $pass = 'MYSQL70@pug';
//         $database = 'enquiries_mi';

//         $this->conn = new mysqli($localhost, $username, $pass, $database);

//     }
//     public function __destruct()
//     {
//         $this->conn->close();
//     }
//     function clean($data)
//     {
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return ($data);
//     }

//     function read_student()
//     {
//         try {
//             //code...
//             $query = "select * from students_reg_code";

//             $result = $this->conn->query($query);
//             // convert the datas from binary values to string
//             $data = $result->fetch_all(MYSQLI_ASSOC);
//             return ($data);

//         } catch (\Throwable $th) {
//             echo $th;
//         }

//     }

//     function student_delete($userid)
//     {
//         try {
//             //code...
//             $deleting="delete from students_reg_code where ID=$userid";
//             $this->conn->query($deleting);
//         } catch (\Throwable $th) {
//             //throw $th;
//             echo $th;
//         }
//     }


//     function edit_student($_DATA,$_upload)
//     {
//         try 
//         {
//             //code...
            
//             $name = $_DATA['name'];
//             $phone = $_DATA['phone'];
//             $gender = $_DATA['gender'];
//             $email = $_DATA['email'];
//             $door_no = $_DATA['door_no'];
//             $street = $_DATA['street'];
//             $district = $_DATA['district'];
//             $state = $_DATA['state'];
//             $country = $_DATA['country'];
//             $pincode = $_DATA['pincode'];
//             $dob = $_DATA['dob'];
//             $qualification = $_DATA['qualification'];
//             $technology = $_DATA['technology'];
//             $skills = implode(", ", $_DATA['skills']);
//             $certification = $_DATA['certification'];
//             $experience = $_DATA['experience'];
//             $ctc = $_DATA['ctc'];
//             $expected_ctc = $_DATA['expected_ctc'];
//             $language = $_DATA['language'];
//             $studentid = $_DATA['studentid'];
//             $upload_responce= $this->upload_resume($_upload);
//             $resume_path=$upload_responce?$upload_responce:"";
//             $upload_pic= $this->upload_pic($_upload);
//             $pic_path=$upload_pic?$upload_pic:"";
//             //var_dump($resume_path);
//             if ($resume_path!==""){
//                 $updating_student = "UPDATE students_reg_code SET 
//                 name = '$name', 
//                 phone = '$phone',
//                 gender = '$gender',
//                 email = '$email',
//                 door_no = '$door_no',
//                 street = '$street',
//                 district = '$district',
//                 state = '$state',
//                 country = '$country',
//                 pincode = '$pincode',
//                 dob = '$dob',
//                 qualification = '$qualification',
//                 technology = '$technology',
//                 skills = '$skills',
//                 certification = '$certification',
//                 experience = '$experience',
//                 ctc = '$ctc',
//                 expected_ctc = '$expected_ctc',
//                 language = '$language',
//                 resume_path='$resume_path',
//                 pic_path = '$pic_path'
//                 WHERE ID = '$studentid'";

//             $this->conn->query($updating_student);
//             }
//             else{
//                 $updating_student = "UPDATE students_reg_code SET 
//                 name = '$name', 
//                 phone = '$phone',
//                 gender = '$gender',
//                 email = '$email',
//                 door_no = '$door_no',
//                 street = '$street',
//                 district = '$district',
//                 state = '$state',
//                 country = '$country',
//                 pincode = '$pincode',
//                 dob = '$dob',
//                 qualification = '$qualification',
//                 technology = '$technology',
//                 skills = '$skills',
//                 certification = '$certification',
//                 experience = '$experience',
//                 ctc = '$ctc',
//                 expected_ctc = '$expected_ctc',
//                 language = '$language'
                
//             WHERE ID = '$studentid'";
            
//                         $this->conn->query($updating_student);
//             }

//         } catch (\Throwable $th) {
//             //throw $th;
//             echo $th;
//         }
//     }

// function upload_resume($_files)
//     {
//         if (isset($_files)) {
            
//             $targetDir = "uploads/";
        
//             $fileName = basename($_files["resume"]["name"]);
//             $targetuploadfile = time().$fileName;
            
            
//             $targetFile = $targetDir .$targetuploadfile;
        
            
//             $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
            
//             $allowedTypes = array('pdf', 'doc', 'docx', 'png', 'jpeg','jpg');
        
            
//             if (in_array($fileType, $allowedTypes)) {
                
//                 if (file_exists($targetFile)) {
//                     return false;
                    
                    
//                 } else {
                
//                     if (move_uploaded_file($_files["resume"]["tmp_name"], $targetFile)) {
//                         return htmlspecialchars($targetuploadfile);
                        
//                     } else {
//                         return false;
                    
//                     }
//                 }
//             } else {
//                 return false;
                
//             }
//         }
        
//     }

//     function upload_pic($_files)
//     {
//         if (isset($_files)) {
            
//             $targetDir = "profile_pic/";
        
//             $fileName = basename($_files["profile_pic"]["name"]);
//             $targetuploadfile = time().$fileName;
            
            
//             $targetFile = $targetDir .$targetuploadfile;
        
            
//             $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
            
//             $allowedTypes = array('pdf', 'doc', 'docx', 'png', 'jpeg','jpg');
        
            
//             if (in_array($fileType, $allowedTypes)) {
                
//                 if (file_exists($targetFile)) {
//                     return false;
                    
                    
//                 } else {
                
//                     if (move_uploaded_file($_files["profile_pic"]["tmp_name"], $targetFile)) {
//                         return htmlspecialchars($targetuploadfile);
                        
//                     } else {
//                         return false;
                    
//                     }
//                 }
//             } else {
//                 return false;
                
//             }
//         }
        
//     }

//     function student_get($_userid)
//     {
//         try {
//             //code...

//             $cleans=$this->clean($_userid);
//             $query = "select * from students_reg_code where id=$cleans";

//             $result = $this->conn->query($query);
//             // convert the datas from binary values to string
//             $data = $result->fetch_assoc();
//             return ($data);

//         } catch (\Throwable $th) {
//             echo $th;
//         }

//     }

//     function reactdetails()
//     {
//         try {
//             //code...
//             $sql = "SELECT * FROM courses_details WHERE id = 1"; 
//             $result = $this->conn->query($sql);

//             $course = $result->fetch_assoc();
//         } catch (\Throwable $th) {
//             //throw $th;
//         }
//     }

//     function insert_students($_DATA,$_upload)
//     {
//         try 
//         {
//             //code...
//             $name = $_DATA['name'];
//             $phone = $_DATA['phone'];
//             $gender = $_DATA['gender'];
//             $email = $_DATA['email'];
//             $door_no = $_DATA['door_no'];
//             $street = $_DATA['street'];
//             $district = $_DATA['district'];
//             $state = $_DATA['state'];
//             $country = $_DATA['country'];
//             $pincode = $_DATA['pincode'];
//             $dob = $_DATA['dob'];
//             $qualification = $_DATA['qualification'];
//             $technology = $_DATA['technology'];
//             $skills = implode(", ", $_DATA['skills']);
//             $certification = $_DATA['certification'];
//             $experience = $_DATA['experience'];
//             $ctc = $_DATA['ctc'];
//             $expected_ctc = $_DATA['expected_ctc'];
//             $language = $_DATA['language'];
            
            
//             $upload_responce= $this->upload_resume($_upload);
//             $resume_path=$upload_responce?$upload_responce:"";
//             $upload_pic= $this->upload_pic($_upload);
//             $pic_path=$upload_pic?$upload_pic:"";
//             //var_dump($pic_path);
//             $inserting = "INSERT INTO students_reg_code (name,phone,gender,email,door_no,street,district,state,
//             country,pincode,dob,qualification,technology,skills,certification,experience,ctc,expected_ctc,language,resume_path,pic_path) 
//             VALUES ('$name','$phone','$gender','$email','$door_no','$street','$district',' $state','$country','$pincode','$dob',
//             '$qualification','$technology','$skills','$certification','$experience',' $ctc','$expected_ctc', '$language','$resume_path','$pic_path')";
//             $this->conn->query($inserting);
           
//         } catch (\Throwable $th) 
//         {
//             echo $th;

//         }

//     }
// }

?>