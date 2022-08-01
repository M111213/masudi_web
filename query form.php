<?php
include_once('connection.php');
$query="select * from table3";
$result=mysql_query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h2>Form Report</h2>
	<center>
<table>
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Date of birth</th>
		<th>Date of Filling the form</th>
		<th>Gender</th>
		<th>Region</th>
		<th>District</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Comment</th>

	</tr>

	<?php
while ($rows=mysql_fetch_assoc($result)) {
	?>
	<tr>
		<td><?php echo $rows['id']; ?></td>
		<td><?php echo $rows['fname']; ?></td>
		<td><?php echo $rows['lname']; ?></td>
		<td><?php echo $rows['date_of_birth']; ?></td>
		<td><?php echo $rows['date_of_filling']; ?></td>
		<td><?php echo $rows['gender']; ?></td>
		<td><?php echo $rows['region']; ?></td>
		<td><?php echo $rows['district']; ?></td>
		<td><?php echo $rows['email']; ?></td>
		<td><?php echo $rows['phone']; ?></td>
		<td><?php echo $rows['comment']; ?></td>
	</tr>
	<?php
}
?>
</table>
</center>

</body>
</html>