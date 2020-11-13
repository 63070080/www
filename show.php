<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'data-tanapong.mysql.database.azure.com', 'nutgod@data-tanapong', 'nut7godalot9?', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
    <th width="150"> <div align="center">Action</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td><a href="www.google.com">Delete</a> <a href="www.google.com">Update</a></td>
  </tr>
<?php
}
?>
</table>
<a href="https://testatjapan.azurewebsites.net/form.html">Add</a>
<?php
mysqli_close($conn);
?>
</body>
</html>
