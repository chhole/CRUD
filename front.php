<?php
session_start();

if (!isset($_SESSION['user'])){
    header('Location: login.html');
}

?>
<style>
    body{
        background: pink;
    }
    .tabel p{
        text-align: left;
    }
    h1{
        margin: 10px;
        text-align: center;
    }
    .table{
        border:1px solid black;
        padding:10px;
        margin-top:40px;
    }
    #create{
        margin-top:-10px;
    }

    #logout{
        margin-left: 1278px;
        margin-top:-40px;
    }
    #heading #create{

    }
</style>
<h1>Welcome to Jigyaasa Blogs</h1>
<div id="logout">
    <button><a href="logout.php">Logout</a>
</div>
    <div id="create">
<button id="create"><a href="create.html">Create New</a></button>
    </div>

<?php
require ("connection.php");

$sql="SELECT * FROM posts";
$html="";
$result=$mysqli->query($sql);
while($row=mysqli_fetch_assoc($result))
{

    $html="<div class='table'>";
$html.="<h1>$row[title]</h1>";
$html.="<p>$row[description]</p>";
$html.="<button ><a href='edit.html?id=$row[id]'>Edit</a></button>";
$html.="<button><a href='delete.php?id=$row[id]'>Delete</a></button>";
$html.="</div><br>";
    echo $html;
}
?>