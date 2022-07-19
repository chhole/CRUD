<?php
session_start();
$_SESSION['user'] = $_POST['mail'];

require 'connection.php';
$mail=$_POST['mail'];
$password=$_POST['password'];
$sql="SELECT * FROM users WHERE email='$mail'";
$result=$mysqli->query($sql);
//print_r($result);
//
//$count=mysqli_num_rows($result);
//echo $count;
if(mysqli_num_rows($result) > 0){
    $row=mysqli_fetch_assoc($result);
    if (empty($mail)){
        echo "<script>alert('Enter registered email id !!!...')</script>";
        echo "<script>window.location.href='login.html?mail=$mail'</script>";
        exit;
    }
    elseif($password == $row['password']){
        echo "Login Successful";
        $_SESSION["id"]=$row['id'];
    }

    else{
        echo "<script>alert('Wrong Password, Try Entering again..')</script>";
        echo "<script>window.location.href='login.html?mail=$mail'</script>";
        exit;
    }
}
else{
    echo "<script>alert('User not registered, Enter registered email id..')</script>";
    echo "<script>window.location.href='login.html'</script>";
    exit;
}
header('location:front.php')
?>