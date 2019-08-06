<!DOCTYPE html>
<html>
<body>

<?php
echo "Welcome";
?>

<form action="envManEnquiry.php" method="post">
Full name: <input type="text" name="fullName"><br>
E-mail: <input type="text" name="email"><br>
Contact number: <input type="text" name="number"><br>
Date:
Budget:
Type of event: <input type="text" name="type"><br>
Theme: <input type="text" name="theme"><br>
Colour scheme: <input type="text" name="cScheme"><br>
Number of guests: <input type="text" name="guests"><br>
Location:<br>
  <input type="checkbox" name="Location" value="North"> North London<br>
  <input type="checkbox" name="Location" value="East"> East London<br>
  <input type="checkbox" name="Location" value="South"> South London<br>
  <input type="checkbox" name="Location" value="West"> West London
<input type="submit">
</form>

</body>
</html>
