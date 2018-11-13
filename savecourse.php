<?php
require('database.php');
$course_id = $_GET['id'];
$course_name = $_GET['name'];
$course_type = $_GET['type'];

$insert_query = "insert into courses(course_id,course_name,course_type) values('$course_id','$course_name','$course_type')";

mysqli_query($connection,$insert_query);

echo "course inserted successfully";

header("Location:courseslist.php");

?>