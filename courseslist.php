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
<div class="container">
  <h2>Assinment work</h2>       
  <h3><a href="index.php">Back</a></h2>       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Course Type</th>
      </tr>
    </thead>
    <tbody>
        <?php
        require('database.php');
        $query = mysqli_query($connection,"select * from $tablename");
        while($row = mysqli_fetch_assoc($query)){ ?>
              <tr>
                <td><?php echo $row['course_id']; ?></td>
                <td><?php echo $row['course_name']; ?></td>
                <td><?php echo $row['course_type']; ?></td>
              </tr>
        <?php } ?>
     </tbody>
  </table>
</div>
</body>
</html>