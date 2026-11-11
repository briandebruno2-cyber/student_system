<?php
include 'db.php';

$result = mysqli_query(
$conn,
"SELECT * FROM students"
);
?>

<!DOCTYPE html>
<html>
<head>
<title>Students</title>
</head>
<body>

<h2>Students List</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['course']; ?></td>
</tr>
<?php
}
?>

</table>

<br>

<a href="index.php">Add Student</a>

</body>
</html>