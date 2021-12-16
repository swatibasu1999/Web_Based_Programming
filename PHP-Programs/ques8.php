<?php
// CONNECTION WITH DATABASE
$con=mysqli_connect('localhost','root','');
if (mysqli_error($con))
    echo "not connected";
else
    echo "connected to database";

echo "</br>";

// CREATNG DATABASE
$create="CREATE DATABASE college";
if (mysqli_query($con, $create))
	
	echo "Database created!";
else
	echo "Database not created!";

echo "</br>";

// DATABASE SELECTION
mysqli_select_db($con,"college");
echo "college database selected";
echo "</br>";

// TABLE-1 CREATION
$table= "CREATE TABLE IT_department(id INT AUTO_INCREMENT NOT NULL,
        name VARCHAR(20) NOT NULL,
        number INT NOT NULL,
        email VARCHAR(30) NOT NULL,
        PRIMARY KEY(id))";
if (mysqli_query($con, $table)) {
echo "Table-1 created successfully";
} else {
echo "Error creating table: " . $con->error;
}

echo "</br>";

// TABLE-2 CREATION
$table= "CREATE TABLE CSE_department(id INT AUTO_INCREMENT NOT NULL,
        name VARCHAR(20) NOT NULL,
        number INT(255) NOT NULL,
        email VARCHAR(30) NOT NULL,
        PRIMARY KEY(id))";
if (mysqli_query($con, $table)) {
echo "Table-2 created successfully";
} else {
echo "Error creating table: " . $con->error;
}

echo "</br>";

// TABLE-3 CREATION
$table= "CREATE TABLE library(book_id INT AUTO_INCREMENT NOT NULL,
        book_name VARCHAR(20) NOT NULL,
        publisher VARCHAR(20) NOT NULL,
        no_of_copies INT NOT NULL,
        PRIMARY KEY(book_id))";
if (mysqli_query($con, $table)) {
echo "Table-3 created successfully";
} else {
echo "Error creating table: " . $con->error;
}

echo "</br>";

// TABLE-4 CREATION
$table= "CREATE TABLE accounts(contact_id INT AUTO_INCREMENT NOT NULL,
        name VARCHAR(20) NOT NULL,
        number INT NOT NULL,
        email VARCHAR(30) NOT NULL,
        transaction_id INT NOT NULL,
        payment_type VARCHAR(30) NOT NULL,
        credit_account_id VARCHAR(30) NOT NULL,
        debit_account_id VARCHAR(30) NOT NULL,
        PRIMARY KEY(contact_id))";
if (mysqli_query($con, $table)) {
echo "Table-4 created successfully";
} else {
echo "Error creating table: " . $con->error;
}

echo "</br>";

// INSERTION INTO TABLE-1
$sql="INSERT INTO IT_department VALUES(1,'Swati Basu', 12345, 'swati@gmail.com')";
	
		if (mysqli_query($con, $sql))
		echo "Data inserted into IT_department table!";
	else
		echo "Failed to insert!";

echo "</br>";

$sql="INSERT INTO IT_department VALUES(2,'Shruti Basu', 96325, 'shruti@gmail.com')";
	
		if (mysqli_query($con, $sql))
		echo "Data inserted into IT_department table!";
	else
		echo "Failed to insert!";

echo "</br>";

// INSERTION INTO TABLE-2
$sql="INSERT INTO CSE_department VALUES(1,'Priya', 85296, 'priya@gail.com')";
	
		if (mysqli_query($con, $sql))
		echo "Data inserted into CSE_department table!";
	else
		echo "Failed to insert!";

echo "</br>";

$sql="INSERT INTO CSE_department VALUES(2,'Rahul', 45678, 'rahul@gail.com')";
	
		if (mysqli_query($con, $sql))
		echo "Data inserted into CSE_department table!";
	else
		echo "Failed to insert!";


echo "</br>";

// INSERTION INTO TABLE-3
$sql="INSERT INTO library VALUES(101,'Introduction to Algorithms', 'MIT Press', 20)";
	
		if (mysqli_query($con, $sql))
		echo "Data inserted into library table!";
	else
		echo "Failed to insert!";

echo "</br>";

$sql="INSERT INTO library VALUES(102,'DBMS', 'Pearson', 30)";
	
		if (mysqli_query($con, $sql))
		echo "Data inserted into library table!";
	else
		echo "Failed to insert!";

echo "</br>";

// INSERTION INTO TABLE-4
$sql="INSERT INTO accounts VALUES(111,'Rahul', '96385', 'rahul@gmail.com', 778899, 'Net Banking', 'ABC456', 'THY852')";
	
		if (mysqli_query($con, $sql))
		echo "Data inserted into accounts table!";
	else
		echo "Failed to insert!";

echo "</br>";

$sql="INSERT INTO accounts VALUES(112,'Raj', '45623', 'raj@gmail.com', 991133, 'UPI', 'WED852', 'PLM896')";
	
		if (mysqli_query($con, $sql))
		echo "Data inserted into accounts table!";
	else
		echo "Failed to insert!";

echo "</br>";

$updt="UPDATE library SET no_of_copies=30 WHERE book_id=101";	
if (mysqli_query($con, $updt))
	echo "Data updated!";
else
	echo "Failed to updated!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, td, th{
        border: 2px solid black;
        border-collapse: collapse;
    }
</style>
<body>
    <h3>IT_department</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
        </tr>
        <?php
        $select="SELECT * from IT_department";
        $res=mysqli_query($con, $select);
        while($row = mysqli_fetch_array($res))
        {
        ?>        
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['number']?></td>
            <td><?php echo $row['email']?></td>
        </tr>
        <?php
        }
        ?>
        </table>

        <br>

        <h3>CSE_department</h3>
        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
        </tr>
        <?php
        $select="SELECT * from CSE_department";
        $res=mysqli_query($con, $select);
        while($row = mysqli_fetch_array($res))
        {
        ?>        
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['number']?></td>
            <td><?php echo $row['email']?></td>
        </tr>
        <?php
        }
        ?>
        </table>

        <br>

        <h3>Library</h3>
        <table>
        <tr>
            <th>Book ID</th>
            <th>Book Name</th>
            <th>Publisher</th>
            <th>No of Copies</th>
        </tr>
        <?php
        $select="SELECT * from library";
        $res=mysqli_query($con, $select);
        while($row = mysqli_fetch_array($res))
        {
        ?>
        <tr>
            <td><?php echo $row['book_id']?></td>
            <td><?php echo $row['book_name']?></td>
            <td><?php echo $row['publisher']?></td>
            <td><?php echo $row['no_of_copies']?></td>
        </tr>
        <?php
        }
        ?>
        </table>

        <br>

        <h3>Accounts</h3>
        <table>
        <tr>
            <th>Contact ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Transaction ID</th>
            <th>Payment Type</th>
            <th>Credit Account ID</th>
            <th>Debit Account ID</th>
        </tr>
        <?php
         $select="SELECT * from accounts";
         $res=mysqli_query($con, $select);
         while($row = mysqli_fetch_array($res))
         {
         ?>
          <tr>
             <td><?php echo $row['contact_id']?></td>
             <td><?php echo $row['name']?></td>
             <td><?php echo $row['number']?></td>
             <td><?php echo $row['email']?></td>
             <td><?php echo $row['transaction_id']?></td>
             <td><?php echo $row['payment_type']?></td>
             <td><?php echo $row['credit_account_id']?></td>
             <td><?php echo $row['debit_account_id']?></td> 
         </tr>
         <?php
         }
         ?>
        </table>
</body>
</html>

<?php
mysqli_close($con);
?>