<?php
  $_TMP_array = [];
  if(isset($_POST['submit']))
  {
    session_start();

    array_push($_TMP_array, $_POST['fname']);
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <form action="" method="post">
    <div>
      <label for="fname">First Name</label>
      <input type="text" name="fname">
    </div>
    <div>
      <label for="lname">Last Name</label>
      <input type="text" name="lname">
    </div>
    <div>
      <input type="submit" name="submit">
    </div>
  </form>
</body>
</html>