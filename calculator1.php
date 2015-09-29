<?php
require_once 'Encode.php'; 

 $post = $_POST;

 $number1 = $post['number1'];
 $number2 = $post['number2'];
 $kigou = "";
 $result = "";
 
 if (isset($post['kigou'])){
    $kigou = $post['kigou'];
}

 switch ($kigou) {
    case '+' :
        $result = $number1 + $number2;
        break;
    case '-' :
        $result = $number1 - $number2;
        break;
    case '×' :
        $result = $number1 * $number2;
        break;
    case '÷' :
        $result = $number1 / $number2;
        break;
}

?>
<html>
<head>
<title>電卓</title>
</head>
<body>

<form method = "POST" action = "calculator1.php">

<input type = "text" name = "number1" size = "10" value ="<?php print $number1; ?>" />

<select name = "kigou">
<option value ="+" <?php if ($kigou == '+'){print 'selected';} ?>> + </option>
<option value ="-" <?php if ($kigou == '-'){print 'selected';} ?>> − </option>
<option value ="×"<?php if ($kigou == '×'){print 'selected';} ?>> × </option>
<option value ="÷"<?php if ($kigou == '÷'){print 'selected';} ?>> ÷ </option>
</select>

<input type = "text" name = "number2" size = "10" value ="<?php print $number2; ?>"/>

<input type = "submit" value = "=" />

<span><?php print e($result); ?></span>


</form>
</body>
</html>