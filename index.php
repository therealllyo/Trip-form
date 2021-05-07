<?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("Connection to the DB failed".mysqli_connect_error());
}
echo"Successfully connected to DB";

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];
$sql="INSERT INTO `IV`.`data` ( `Name`, `Gender`, `Age`, `Email`, `Phone`, `Other`, `Datetime`)
 VALUES ( '$name', '$gender', '$age', '$email', '$phone', '$other',  current_timestamp())";

if($con->query($sql) == true){
    echo "Successfully inserted";

    // Flag for successful insertion
    // $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Vidyavardhini's College of Engineering & Technology</h1>
        <p>This is the form for your Industrial Visit</p>
        <form action="index.php" method="post" id="form">
            <input type="text" name="name" id="name" placeholder="Enter your Name:">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender:">
            <input type="number" name="age" id="age" placeholder="Enter your Age:">
            <input type="email" name="email" id="email" placeholder="Enter your Email:">
            <input type="tel" name="phone" id="phone" placeholder="Enter your Phone Number:">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Doubts and Queries"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>