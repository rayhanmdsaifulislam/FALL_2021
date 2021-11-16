<!DOCTYPE html>
<head>
<link rel="stylesheet" href="mystyle.css">
<title> Registration Form </title>
</head>
<body>
<div class="head">
    <table>
    <tr>
     
        <h1 class="head"> ABC Management System </h1>
        <h4 class="head"> We Create Furniture </h4>
        
</tr>
<tr>
<td> <h5><b> Home </b></h5></td> <br>
<td> <h5><b> AboutUS </b></h5></td>
<td> <h5><b>Shop <b></h5></td>
</tr>
</table>
</div>
<form method="POST"  action="submissiondata.php">
    <fieldset class="formcl">
    <h1 class="resf"> Registration Form </h1>
    <hr>
    <div class="fname">
    <label for="text">First Name: </label>
    <input type="text" name="fname" placeholder=""><br> 
    <br>
     </div>
     <div class="lname">
    <label for="lname">Last Name: </label>
    <input type="text" name="lname" placeholder=""><br>
    <br>
    </div>
    <div class="age">
    <label for="age">Age: </label> 
    <input type="text" name="age" placeholder=""><br>
    <br>
    </div>
    <div class="des">
    <label for="rad"> Designation: </label>
    <label for="jp"> Junior Programmer </label>
    <input type="radio" name="pr">
    <label for="sp"> Senior Programmer </label>
    <input type="radio" name="pr">
    <label for="pl"> Project Leader </label>
    <input type="radio" name="pr"><br>
    <br>
    </div>
    <div class="prel">
    Preferred Language:
    <input type="checkbox" name="c1" value="Java">
    <label for="java"> JAVA</label>
    <input type="checkbox" name="c1" value="PHP">
    <label for="php"> PHP </label>
    <input type="checkbox" name="c1" value="C++">
    <label for="c++"> C++ </label>
    <br>
    <label for="c++"> C++ </label> <br>
     </div>
     <div class="email">
    <label for="email">Email: </label>
    <input type="text" name="email" value=""> <br>
    <br>
    </div>
    <div class="pass">
    <label for="pass">Password: </label>
    <input type="password" name="password" value=""> <br>
    <br>
    </div>
    <div class="file">
    <label for="fu">Please Choose The File: </label>
    <input type="file" name="fu"><br>
    <br>
    </div>
    <input type="submit" class="button" value="Submit">
    <input type="reset" class="button" value="Reset">

</fieldset>
</body>
</html>