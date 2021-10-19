<!DOCTYPE html>
<?php
include('database.php');
?>
<html>
    <head>

    </head>
    <body>
        <form method="POST">
            <fieldset>
            <h1> Please Fill up the Form </h1>
            <hr>
            <label for="text">First Name: </label>
            <input type="text" name="fname" placeholder=""><br> 
            <br>
            <label for="lname">Last Name: </label>
            <input type="text" name="lname" placeholder=""><br>
            <br>
            <label for="email">Email: </label>
            <input type="text" name="email" value=""><br>
            <br>
            <label for="rad"> Gender: </label>
            <label for="male"> Male </label>
            <input type="radio" id="male" name="rad">
            <label for="female"> Female </label>
            <input type="radio" id="female" name="rad"><br>
            <br>
            <label for="mobile">Mobile No: </label>
            <input type="text" name="mobile" value=""><br>
            <br>
            <br>
            <label for="dob">Date Of Birth: </label>
            <input type="date" name="dob" value=""><br>
            <br>
            <br>
            <label for="hsc">HSC results: </label>
            <input type="text" name="hsc" value=""> <br>
            <br>
            <br>
            <label for="ssc">SSC results: </label>
            <input type="text" name="ssc" value=""> <br>
            <br>
            <label for="course">Select a Course you want to enroll: </label>
            <select name="course">
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="IPE">IPE</option>
                <option value="CIS">CIS</option>
            </select>
            <br>
            <br>
            <label for="enroll">Choose a Year Enrolling Year: </label>
            <select name="enroll">
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select>
            <br>
            <br>
            <label for="academic">Choose a Year Enrolling Year: </label>
            <select name="academic">
                <option value="Summer">SUMMER</option>
                <option value="Fall">FALL</option>
                <option value="Spring">SPRING</option>
            </select>
            <br>
            <br>
            <input type="submit" name="insert" value="Insert Data">

    </body>
</html>