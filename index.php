<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
</head>
<body>

<h2>Register Student</h2>

<form action="save.php" method="POST">

<label>Name</label><br>
<input type="text" name="name"><br><br>

<label>Email</label><br>
<input type="email" name="email"><br><br>

<label>Course</label><br>
<input type="text" name="course"><br><br>

<button type="submit">Save Student</button>

</form>

<br>

<a href="view.php">View Students</a>

</body>
</html>