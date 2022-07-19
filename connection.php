<?php
$mysqli=new mysqli("localhost","admin","admin","postdb");
if ($mysqli -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
?>