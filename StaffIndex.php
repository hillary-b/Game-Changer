<!DOCTYPE HTML>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="SiteCss.css">
</head>
<header>
 
</header>
  
<body>
  <?php
    $StaffUsername = $StaffPassword = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $StaffUsername = test_input($_POST["StaffUsername"]);
      $StaffPassword = test_input($_POST["StaffPassword"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>

  <table>
    <tr>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <th>Username: <input type="text" name="StaffUsername" value="Username"></th>
      <th>Password: <input type="text" name="StaffPassword" value="Password"></th>
      <th><input type="submit" value="Login"></th>
    </form>
    </tr>
  </table>
  
  <?php
    echo $StaffUsername;
    echo "<br>";
    echo $StaffPassword;
  ?>
  
</body>

<footer>
  
</footer>   
</html>
