<?php // Example 26-4: index.php
  require_once 'header.php';

  echo "<br><span class='main'> <center> Welcome to $appname.";

  if ($loggedin) echo " Hello, $user, welcome to the pod!";
  else           echo ' please sign up and/or log in to join in.';
?>

    </span><br><br>
  </body>
</html>
