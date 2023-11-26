<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phoneno = $_POST['phone-no'];
 $message = $_POST['message'];

 echo $name;
 echo $email;
 echo $phoneno;
 echo $message;

$link = mysqli_connect("localhost", "root", "", "cse309_assignment_3");

if($link === false){
    die("ERROR: Could not connect. " - mysqli_connect_error());
}

$sql = "INSERT INTO `contactinfo` (`name`, `email`, `phoneNo`, `message`) VALUES ('$name', '$email', '$phoneno', '$message')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
}

mysqli_close($link);
?>
