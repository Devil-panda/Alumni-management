<?php
  require_once 'config.php';

  if (isset($_POST['submit'])) {
    $Name = $_POST['search'];
    

    $sql = "SELECT name, college, grad_year, email FROM usertable WHERE name LIKE '%$Name%' OR college LIKE '%$Name%' OR grad_year LIKE '%$Name%'";
    //$stmt = $conn->prepare($sql);
    //$stmt->execute(['name' => $Name]);
    $result = $conn->query($sql);
    $row = $result->fetchAll();
  } else {
    header('location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel = "icon" href = "images/logo.png" type = "image/jpeg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-5 mx-auto">
        <div class="card shadow text-center">
          <div class="card-header">
            <h1><?php foreach($row[0] as $key => $val){
        echo "$key: $val \n";
    } ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>