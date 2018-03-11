<?php // Example 26-4: index.php
  require_once 'header.php';

  echo "<br><span class='main'> <center> Welcome to $appname.";

  echo "<br><span class='main'> <left> This is a site where you and your friends/family can keep in contact with each other in real time. 
  Some of the features you will find here include user signup, profile creation, sending/recieving of instant messages, and the ability to track the location of friends.";

  if ($loggedin) echo "<br> Hello, $user, welcome to the Peas in a Pod!";
  else          echo ' <br>Please sign up and/or log in to join.';
?>
    </span><br><br>
  </body>
</html>
