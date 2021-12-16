<?php
include 'process.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>

    <style>
    body{
    background-color: #FFE0F7;
    font-family: 'Montserrat', sans-serif;
    } 

    table, td, th{
        border: 2px solid black;
        border-collapse: collapse;
        padding: 15px;
    }

    tr:nth-child(even) {
    background-color: #B4FE98;
    }

    .heading{
        text-align: center;
        padding: 5px;
    }

    .tab{
    margin-left: auto;
    margin-right: auto;
    }
    </style>

    <body>
    <h1 class="heading">STUDENT RECORDS</h1>
    <table class="tab">
        <tr>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Postal Address</th>
            <th>Permanent Address</th>
            <th>Gender</th>
            <th>City</th>
            <th>Course</th>
            <th>District</th>
            <th>State</th>
            <th>Hobbies</th>
            <th>Pincode</th>
            <th>Email ID</th>
            <th>DOB</th>
            <th>Mobile No.</th>
        </tr>
        <?php
        $select="SELECT * from registration";
        $res=mysqli_query($con, $select);
        while($row = mysqli_fetch_array($res))
        {
        ?>        
        <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['father_name']?></td>
            <td><?php echo $row['postal_address']?></td>
            <td><?php echo $row['permanent_address']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['city']?></td>
            <td><?php echo $row['course']?></td>
            <td><?php echo $row['district']?></td>
            <td><?php echo $row['state']?></td>
            <td><?php echo $row['hobbies']?></td>
            <td><?php echo $row['pincode']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['mobile']?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        
        <script src="" async defer></script>
    </body>
</html>