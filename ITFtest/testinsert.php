<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'thitiwut.mysql.database.azure.com', 'thitiwut@thitiwut', 'Aom26rock', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$A = $_POST['A'];
$B = $_POST['B'];
$C = $A+$B;


$sql = "INSERT INTO guestbook (A , B , B) VALUES ('$A', '$B', '$C')";


if (mysqli_query($conn, $sql)) {
    echo "Success";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>