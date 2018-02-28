<?php>

<html> 
<head>   
<title>Distance Converter</title> 
</head> 

if (isset($_POST['m'])) $m = sanitizeString($_POST['m']); 
if ($m != '') 

$out = "$m Miles equals $k Kilometers"; 

<h1>AddMiles</h1>
<form method="post" action="convert.php">
<label>Miles:</label>
<input type="text" name="miles"/><br/>

$validate = FormValidator();
$validat3e -> addValidation(.... put some validation here .....)
if (!$validate ->ValidateForm())
{
echo ...foreach( .. check validation here ....)
}

?>