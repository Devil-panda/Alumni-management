<?php
  require_once 'config.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $inpint = (int)$inpText;
    $sql = "SELECT name FROM usertable WHERE name LIKE '%$inpText%' OR college LIKE '%$inpText%' OR grad_year LIKE '%$inpint%'";
    //$stmt = $conn->prepare($sql);
    //$stmt->execute(['CustomerName' => '%' . $inpText . '%']);
    $result = $conn->query($sql);

    if ($result) {
      foreach ($result as $row) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['name'] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }
  }
?>