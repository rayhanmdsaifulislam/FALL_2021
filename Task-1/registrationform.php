<!DOCTYPE html>
<head>
<title> Registration Form </title>
</head>
<body>
<form action="submission.php" method="POST">
    <fieldset>
    <h1> Registration Form </h1>
    <hr>
    <label for="text">First Name: </label>
    <input type="text" name="fname" placeholder=""><br> <?php echo $validatename; ?>
    <label for="lname">Last Name: </label>
    <input type="text" name="lname" placeholder=""><br><?php echo $validatename; ?>
    <label for="age">Age: </label> 
    <input type="text" name="age" placeholder=""><br><?php echo $validateage; ?>
    <label for="rad"> Designation: </label>
    <label for="jp"> Junior Programmer </label>
    <input type="radio" id="jp" name="rad" value="radio1">
    <label for="sp"> Senior Programmer </label>
    <input type="radio" id="sp" name="rad" value="radio1">
    <label for="pl"> Project Leader </label>
    <input type="radio" id="pl" name="rad" value="radio1"><br>
    <?php echo $validateradio; ?>
    Preferred Language:
    <input type="checkbox" name="java" value="Bike">
    <label for="java"> JAVA</label>
    <input type="checkbox" name="php" value="Car">
    <label for="php"> PHP </label>
    <input type="checkbox" name="c++" value="Boat">
    <label for="c++"> C++ </label>
    <br>
    <?php echo $validatecheckbox; ?>
    <?php echo $v1;?>
    <?php echo $v2;?>
    <?php echo $v3;?>
    <label for="c++"> C++ </label> <br>
    <label for="email">Email: </label>
    <input type="text" name="email" value=""> <?php echo $validateemail; ?><br>
    <label for="pass">Password: </label>
    <input type="password" name="password" value=""> <?php echo $validatepass; ?><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">

</fieldset>
</body>
</html>
