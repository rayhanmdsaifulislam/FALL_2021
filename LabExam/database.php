<?php
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AIUB";
$error="";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{

    if(isset($_POST['insert'])){
        if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['rad']) || empty($_POST['mobile']) || empty($_POST['dob']) || empty($_POST['hsc']) || empty($_POST['ssc']) || empty($_POST['course']) || empty($_POST['enroll']) || empty($_POST['academic'])){
            echo "Please Fill Up The Form";
        }
        else
        {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $gender=$_POST['rad'];
        $mobile=$_POST['mobile'];
        $dob=$_POST['dob'];
        $hsc=$_POST['hsc'];
        $ssc=$_POST['ssc'];
        $course=$_POST['course'];
        $enroll=$_POST['enroll'];
        $academic=$_POST['academic'];

        $connection = new db();
        $conobj=$connection->OpenCon();
        $sql = "INSERT INTO New_Student (First_Name, Last_Name, Email, Gender, Mobile, DateOfBirth, HSC, SSC, Course, Enroll, Academic_Year)
        VALUES ($fname, $lname, $email, $gender, $mobile, $dob, $hsc, $ssc, $course, $enroll, $academic)";

        if ($conn->query($sql) === TRUE) {
        echo "Created Successfully";
        }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }
        
    }
    else{
        header("location : infoform.php");
    }
}
$conn->close();
?>