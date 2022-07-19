<?php
require ("connection.php");
$title=$_POST['title'];
$description=$_POST['description'];
        if(empty($description)||empty($title)) {
            echo "<script>alert('Required Description');</script>";
            echo "<script>window.location.href='create.html'</script>";
        }
        else {
            $sql = $mysqli->query("INSERT INTO posts(title,description) VALUES ('$title','$description')");
            echo "<script>alert('New Blog created successfully');</script>";
            echo "<script>window.location.href='front.php'</script>";
        }
        ?>







