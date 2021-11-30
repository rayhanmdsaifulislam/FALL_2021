<!DOCTYPE html>
<head>
<title> Registration Form </title>
</head>
<body>
<form method="POST" action="">
    <fieldset>
    <h1> Registration Form </h1>
    <hr>
    <label for="text">First Name: </label>
    <input type="text" id="fname" name="fname" placeholder=""><br> 
    <br>
    <label for="lname">Last Name: </label>
    <input type="text" id="lname" name="lname" placeholder=""><br>
    <br>
    <label for="age">Age: </label> 
    <input type="text" id="age" name="age" placeholder=""><br>
    <br>
    <label for="rad" id="rad"> Designation: </label>
    <label for="jp"> Junior Programmer </label>
    <input type="radio" name="pr">
    <label for="sp"> Senior Programmer </label>
    <input type="radio" name="pr">
    <label for="pl"> Project Leader </label>
    <input type="radio" name="pr"><br>
    <br>
    Preferred Language:
    <input type="checkbox" name="c1" value="Java">
    <label for="java"> JAVA</label>
    <input type="checkbox" name="c1" value="PHP">
    <label for="php"> PHP </label>
    <input type="checkbox" name="c1" value="C++">
    <label for="c++"> C++ </label>
    <br>
   
    <label for="c++"> C++ </label> <br>
    <label for="email">Email: </label>
    <input type="text" name="email" value=""> <br>
    <br>
    <label for="pass">Password: </label>
    <input type="password" id="password" name="password" value=""> <br>
    <br>
    <label for="fu">Please Choose The File: </label>
    <input type="file" name="fu"><br>
    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">

</fieldset>
<script src="../JS/regvalidationjs.js"></script>
</body>
</html>