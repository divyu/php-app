<?php
  $cookiename = "DivyanshuGautam"; // don't include any inprintable char in cookie's name and value.
  $cookieval = "devuser";
  setcookie( $cookiename,  $cookieval, time()+3600);
?>
<!DOCTYPE html>
<html>
<title>Cookie user</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container w3-blue w3-margin w3-padding w3-card">
  <h1>Cookie Storage</h1>
  <?php
    if(!isset($_COOKIE[$cookiename])){
      echo "Cookie with name - ".$cookiename." has not been set by the user ";
    }else{
      echo "Cookie with name - ".$cookiename.'<br>'."Cookie value -".$cookieval;
    }
  ?>
</div>
</body>
</html>
