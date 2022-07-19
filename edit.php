<?php
require ("connection.php");
$id=$_POST['id'];
$sql="SELECT title,description FROM posts WHERE id=$id";
$result=$mysqli->query($sql);
$html = "";
$row=mysqli_fetch_assoc($result);
    $title = $row['title'];
    $description = $row['description'];
    $html .= "<form method='post' action='edit1.php?id=$id'>";
    $html .= "<label>Title</label>";
    $html .= "<input type='text' name='title' value='$title'><br><br><br><br>";
    $html .= "<label style='float: left;'>Description</label>";
    $html .= "<textarea style='margin-left: 10px ;height: 90px;width:500px' name='description' type='text-area'>$description</textarea><br><br>";
    $html .= "<input type='submit' value='Edit Blog'>";
    $html .= "</form>";
echo $html;
    exit;

?>