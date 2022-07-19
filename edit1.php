<?php 

require ("connection.php");
$userId= $_GET['id'];
//echo $id;
$title=$_POST['title'];
$description=$_POST['description'];
//echo $title;
//echo $description;
$sql = "UPDATE `posts` SET `title` = '$title', `description` = '$description' WHERE `posts`.`id` = $userId;";

if ($mysqli->query($sql) === TRUE){
    echo "<script>window.location.href='front.php'</script>";
}else{
    echo $mysqli->error;
}

?>