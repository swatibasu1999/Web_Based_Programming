<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Registration Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="reg.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <h1 style="text-align: center;"><u>STUDENT REGISTRATION FORM</u></h1>

    <form action="" method="POST" enctype="multipart/form-data">
    <table class="tab">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id="" size="50"></td>
        </tr>

        <tr>
            <td>Father's Name</td>
            <td><input type="text" name="father_name" id="" size="50"></td>
        </tr>

        <tr>
            <td>Postal Address</td>
            <td><input type="text" name="postal_address" id="" size="50"></td>
        </tr>

        <tr>
            <td>Permanent Address</td>
            <td><input type="text" name="permanent_address" id="" size="50"></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" id="" value="male">Male
                <input type="radio" name="gender" id="" value="female">Female
            </td>
        </tr>

        <tr>
            <td>City</td>
            <td>
                <select name="city" id="">
                    <option value="-1" selected>Select City</option>
                    <option value="New Delhi">New Delhi</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Chennai">Chennai</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Course</td>
            <td>
                <select name="course" id="">
                    <option value="-1" selected>Select course</option>
                    <option value="MCA">MCA</option>
                    <option value="M.Tech">M.Tech</option>
                    <option value="B.Tech">B.Tech</option>
                    <option value="BCA">BCA</option>
                    <option value="BSC">BSC</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>District</td>
            <td>
                <select name="district" id="">
                    <option value="-1" selected>Select District</option>
                    <option value="North-West">North-West</option>
                    <option value="North">North</option>
                    <option value="South-West">South-West</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>State</td>
            <td>
                <select name="state" id="">
                    <option value="-1" selected>Select state</option>
                    <option value="New Delhi">New Delhi</option>
                    <option value="Maharshtra">Maharshtra</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Hobbies</td>
            <td>
                <input type="checkbox" name="hobbies" value="dancing">Dancing
                <input type="checkbox" name="hobbies" value="painting">Painting
            </td>
        </tr>

        <tr>
            <td>PinCode</td>
            <td><input type="number" name="pincode" id="" size="50"></td>
        </tr>

        <tr>
            <td>Email ID</td>
            <td><input type="email" name="email" id="" size="50"></td>
        </tr>

        <tr>
            <td>DOB</td>
            <td><input type="date" name="dob" id="" size="50"></td>
        </tr>

        <tr>
            <td>Mobile No</td>
            <td><input type="number" name="mobile" id="" size="50"></td>
        </tr>

        <tr>
            <td><input type="reset" name="reset" id=""></td>
            <td><input type="submit" name="submit" id=""></td>
        </tr>
    </table>
    </form>

    <script src="" async defer></script>
</body>

</html>


<?php

include 'process.php';
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $father_name= $_POST['father_name'];
    $postal_address= $_POST['postal_address'];
    $permanent_address= $_POST['permanent_address'];
    $gender= $_POST['gender'];
    $city= $_POST['city'];
    $course= $_POST['course'];
    $district= $_POST['district'];
    $state= $_POST['state'];
    $hobbies= $_POST['hobbies'];
    $pincode= $_POST['pincode'];
    $email= $_POST['email'];
    $dob= $_POST['dob'];
    $mobile= $_POST['mobile'];


       $insertquery= "insert into registration(name, father_name, postal_address, permanent_address, gender, city, course, district, state, hobbies, pincode, email, dob, mobile) values('$name', '$father_name', '$postal_address', '$permanent_address', '$gender', '$city', '$course', '$district', '$state', '$hobbies', '$pincode', '$email', '$dob', '$mobile')";
       $query= mysqli_query($con, $insertquery);

       if($query){
        echo '<script>alert("Welcome !!")</script>'; 
        ?>
        <script>
        window.location = "display.php";
        </script>

        <?php
       }
       else{
           echo "not inserted";
       }
    }

?>
