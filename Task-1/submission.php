<?php
$validatename="";
$validateage="";
$validateemail="";
$validatepass="";
$validatecheck="";
$v1=$v2=$v3="";
$validateradio="";
$fname=$lname=$email=$age="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $age=$_REQUEST["age"]
}
if(empty($_REQUEST["fname"]) || empty($_REQUEST["lname"]) || (strlen($_REQUEST["fname"])<5) || (strlen($_REQUEST["lname"])<5){
    echo $validatename="Please enter your Name: ";
    
}
else{
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
}
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= "Email ".$email;
}
if(empty($age)){
    echo $validateage="Please enter your age";
}else{
    $validateage="Age".$age;
}
if(isset($_REQUEST["rad"]))
{
    $validateradio= $_REQUEST["rad"];
}
else{
    $validateradio= "please select at least one radio";

if(empty($password) || (strlen($_REQUEST["password"])<8)){
   echo $validatepass="Please enter your password";
}
else{
    echo "Password".$password;
}
if(!isset($_REQUEST["java"])&&!isset($_REQUEST["php"])&&!isset($_REQUEST["c++"]))
{
    $validatecheckbox = "Please check one check box: ";
    
}
else{
   if(isset($_REQUEST["java"]))
   {
       $v1= $_REQUEST["java"];
   }
   if(isset($_REQUEST["php"]))
   { 
       $v2= $_REQUEST["php"];
   }
   if(isset($_REQUEST["php"]))
   {
    $v3= $_REQUEST["php"];
   }
}


?>
