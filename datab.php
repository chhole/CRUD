<?php
require 'connection.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$sql="SELECT email FROM users WHERE email='$mail'";
$result=$mysqli->query($sql);
if(mysqli_num_rows($result)>0)
{echo "<script>alert('User already exists, please login to continue');</script>";
echo "<script>window.location.href='index.html'</script>";
}
else {
    $sql = "INSERT INTO users (first_name,last_name,email,password) VALUES ('$fname','$lname','$mail','$password')";
    $result = $mysqli->query($sql);
    echo "<script>alert('Registered Successfully. Please Login to continue');</script>";
    echo "<script>window.location.href='login.html'</script>";
}
?>