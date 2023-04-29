<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE usertable set name='" . $_POST['name'] . "', mail='" . $_POST['mail'] . "', college='" . $_POST['college'] . "' ,grad_year='" . $_POST['grad_year'] . "' WHERE userid='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM usertable WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
college:<br>
<input type="text" name="college" class="txtField" value="<?php echo $row['college']; ?>">
<br>
grad_year:<br>
<input type="text" name="grad_year" class="txtField" value="<?php echo $row['email']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>