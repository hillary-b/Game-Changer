<!DOCTYPE html>
<html>
<body>

  <a href="CustomerRegister.html">Register</a>
  <a href="CustomerLogin.html" onclick="myFunction()">Login</a>
  
  <script>
    function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
    }
  </script>
  
  <span class="popuptext" id="myPopup">
    
  </span>
  
</body>
</html>
