<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel="stylesheet" href="style2.css">
 <style>
body {
  background-image: url("tablebg.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  <div class="cell" >
  <tr>
    <td>name</td>
    <td>email</td>
	<td>contact</td>
    <td>jobdescription</td>
	<td>experience</td>
	<td>identity</td>
	<td>media</td>
  </tr>
</div>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
 <div class="cell1">
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["contact"]; ?></td>
    <td><?php echo $row["jobdescription"]; ?></td>
	<td><?php echo $row["experience"]; ?></td>
	<td><?php echo $row["identity"]; ?></td>
	<td><?php echo $row["media"]; ?></td>
</tr>
</div>
<?php
$i++;
}
?>

</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
