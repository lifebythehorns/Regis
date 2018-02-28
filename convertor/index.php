<?php
//INSERT INTO `convertor` (`c_input`, `f_input`, `output`) VALUES ('2', '', '')

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db); 
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM convertor"; 
$result = $conn->query($query); 
if (!$result) die($conn->error);

$rows = $result->num_rows;

for ($j = 0 ; $j < $rows ; ++$j) 
{
    $result->data_seek($j); 
    echo 'Favorite: ' . $result->fetch_assoc()['category'] . '<br>'; 
    $result->data_seek($j); 
    echo 'Title: '    . $result->fetch_assoc()['title'] . '<br>'; 
    $result->data_seek($j);
    echo 'Additional Info: ' . $result->fetch_assoc()['info'] . '<br><br>'; 
}
    
$result->close(); 
$conn->close();
?>


