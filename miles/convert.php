<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db); 
if ($conn->connect_error) die($conn->connect_error);

////INSERT INTO `convertor`(`f_input`, `c_input`, `output`) VALUES ([value-1],[value-2],[value-3])
//$query = "INSERT INTO 'convertor' (`c_input`, `f_input`, `output`) VALUES('$c', '$f', $out)";


$f = $c = ''; // km = mi

  if (isset($_POST['f'])) $km = sanitizeString($_POST['km']);
  if (isset($_POST['c'])) $mi = sanitizeString($_POST['mi']);


  if ($km != '')
  {
    $mi = intval((1 * 0.62137));
    $out = "$km kilometers equals $mi miles";
  }
  elseif($mi != '')
  {
    $km = intval((9 / 5) * $c + 32);
    $out = "$c c equals $f f";
  }
  else $out = "";

  $query = "INSERT INTO `converter`.`converter` (f_input, c_input, output) VALUES ('$f', '$c', '$out');";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);



  echo <<<_END
<html>
  <head>
    <title>Temperature Converter</title>
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

  function sanitizeString($var)
  {
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
  }
?>
