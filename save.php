<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

$stmt = $conn->prepare(
"INSERT INTO students(name,email,course)
VALUES (?,?,?)"
);

$stmt->bind_param(
"sss",
$name,
$email,
$course
);

$stmt->execute();

echo "
<h2>Student Saved Successfully</h2>
<a href='index.php'>Back</a>
";

?>