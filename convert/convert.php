<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db); 

if ($conn->connect_error) die($conn->connect_error);


$f = $c = '';

  if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);

  if (isset($_POST['c'])) $c = sanitizeString($_POST['c']);


  if ($f != '')
  {
    $c = intval((5 / 9) * ($f - 32));
    $out = "$f F equals $c C";
  }
  elseif($c != '')
  {
    $f = intval((9 / 5) * $c + 32);
    $out = "$c C equals $f F";
  }
  else $out = "";

  $query = "INSERT INTO converter (f_input, c_input, output) VALUES ('$f', '$c', '$out');";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);




  echo <<<_END
<html>
  <head>
    <title>Temperature Converter and Past Conversions</title>
  </head>
  <body>
    <pre>
      Enter either Fahrenheit or Celsius and click on Convert
        
      <b>$out</b>
      <form method="post" action="convert.php">
        Fahrenheit <input type="text" name="f" size="7">
           Celsius <input type="text" name="c" size="7">
                   <input type="submit" value="Convert">
      </form>
    </pre>
  </body>
</html>
_END;

$query  = "SELECT * FROM converter";
  
$result = $conn->query($query);
  
if (!$result) die($conn->error);

  
$rows = $result->num_rows;

  
for ($j = 0 ; $j < $rows ; $j++)
  {
    
  $result->data_seek($j);
    
  echo 'Past conversions: '   . $result->fetch_assoc()['output'] . '<br>';
  
  }

  

$result->close();
  
$conn->close();

  function sanitizeString($var)
  {
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
  }
?>
