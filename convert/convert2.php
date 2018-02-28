<?php // query.php
  
require_once 'login.php';
  
$conn = new mysqli($hn, $un, $pw, $db);
  
if ($conn->connect_error) die($conn->connect_error);

  

$f = $c = '';

  
if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);
  
if (isset($_POST['c'])) $c = sanitizeString($_POST['c']);

  
 
if ($f != '')
  {
    $c = intval((5 / 9) * ($f - 32));
    
	 	$query    = "INSERT INTO converter VALUES" .
      "('', '$f', '$c')";
    
		$result   = $conn->query($query);

  	
		if (!$result) echo "INSERT failed: $query<br>" .
      $conn->error . "<br><br>";

		}
  
	elseif($c != '')
  {
    
		$f = intval((9 / 5) * $c + 32);
 
		$query    = "INSERT INTO converter VALUES" .
      "('', '$f', '$c')";
    
		$result   = $conn->query($query);

  	
		if (!$result) echo "INSERT failed: $query<br>" .
      $conn->error . "<br><br>";  }
  
	else {
  $query    = "INSERT INTO converter VALUES" .
      "('', '$f', '$c')";
    
		$result   = $conn->query($query);

  	
		if (!$result) echo "INSERT failed: $query<br>" .
      $conn->error . "<br><br>";  }

 

$query  = "SELECT * FROM converter";
  
$result = $conn->query($query);
  
if (!$result) die($conn->error);

  
$rows = $result->num_rows;

  
for ($out = 0 ; $j < $rows ; $out++)
  {
    
	$result->data_seek($out);
    
	echo 'Row#: '   . $result->fetch_assoc()['Row']   . '&nbsp';
    
	$result->data_seek($j);
    
	echo 'Fahr: '    . $result->fetch_assoc()['Fahr']    . '&nbsp';
    
	$result->data_seek($j);
    echo 'Celcius: ' . $result->fetch_assoc()['Celc'] . '<br>';
  
	}

  

$result->close();
  
$conn->close();


echo <<<_END

	<html>
  
		<head>
    <title>Temperature Converter</title>
  </head>
  
		<body>
    
			<pre>
      Enter either Fahrenheit or Celsius and click on Convert
        
          
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
