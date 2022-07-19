<?php
$id=$_GET['id'];
require ("connection.php");
$sql="DELETE FROM `posts` WHERE `posts`.`id` = $id";
$mysqli->query($sql);
if ($mysqli->query($sql) === TRUE){
    echo "<script>window.location.href='front.php'</script>";
}else{
    echo $mysqli->error;
}
?>