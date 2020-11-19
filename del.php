<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'data-tanapong.mysql.database.azure.com', 'nutgod@data-tanapong', 'nut7godalot9?', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$pplid = $_GET['id'];

$sql    = "DELETE FROM guestbook WHERE ID = '".$pplid."'";
$query  = $conn->query($sql); 
if($query){
    echo "successfully <br>";
    echo "<a href='show.php'>ย้อนกลับ</a>";
} else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>