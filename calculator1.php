<?php
require_once 'Encode.php'; 

 $a = $_POST['number1'];
 $b = $_POST['number2'];
 $c = '';
foreach ($_POST as $value) {
	switch ($value) {
		case '+' :
			$c = $a + $b;
			break;
		case '-' :
			$c = $a - $b;
			break;
		case '×' :
			$c = $a * $b;
			break;
		case '÷' :
			$c = $a / $b;
			break;
	}
}
?>
<html>
<head>
<title>電卓</title>
</head>
<body>

<form method = "POST" action = "calculator1.php">

<input type = "text" name = "number1" size = "10" value ="<?php print $a; ?>" />

<select name = "kigou">
<option value ="+" selected> ＋ </option>
<option value ="-"> − </option>
<option value ="×"> × </option>
<option value ="÷"> ÷ </option>
</select>

<input type = "text" name = "number2" size = "10" value ="<?php print $b; ?>"/>

<input type = "submit" value = "=" />

<span><?php print $c; ?></span>


</form>
</body>
</html>