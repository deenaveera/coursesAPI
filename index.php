<!DOCTYPE html>
<html lang="en">
<head>
  <title>Interview</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$restapi_url = 'https://api.coursera.org/api/courses.v1';
$content = file_get_contents($restapi_url);
$json = json_decode($content, true);
?>

<div class="container">
  <h2>Assinment work</h2>       
  <h3><a href="courseslist.php">List of saved courses</a></h2>       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Course Type</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($json['elements'] as $element) {?>
      <tr>
        <td><?php echo $element['id']; ?></td>
        <td><?php echo $element['name']; ?></td>
        <td><?php echo $element['courseType']; ?></td>
        <td><a href="savecourse.php?id=<?php echo $element['id']; ?>&name=<?php echo $element['name']; ?>&type=<?php echo $element['courseType']; ?>">Save</a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>