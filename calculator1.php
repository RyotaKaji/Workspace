<?php

 $post = $_POST;


//変数が定義されているか
//変数がnull/blank(empty関数)でないか→初期resultも消える
 if (!isset($post['kigou']) or empty($post['kigou'])) {
        $kigou = "";
}


//それぞれの入力値が数字かどうかチェックする

 if (is_numeric($post['number1'])) {
    $number1 = $post['number1'];
}

 if (is_numeric($post['number2'])) {
    $number2 = $post['number2'];
}

 
//記号チェック(nullじゃないかの確認も)

 if (isset($post['kigou'])){
    if ($post['kigou'] == '0' or $post['kigou'] == '1' or $post['kigou'] == '2' or $post['kigou'] == '3') { 
       $kigou = $post['kigou'];
}
}


//計算する＆ゼロ除算を防ぐ

if ($kigou == '0') {
    $result = $number1 + $number2;
} else if ($kigou == '1') {
    $result = $number1 - $number2;
} else if ($kigou == '2') {
    $result = $number1 * $number2;
} else if ($kigou == '3' && $number2 == '0') {
    $result = 'error';
} else if ($kigou == '3' && $number2 != '0') {
    $result = $number1 / $number2;
} else {
    $result = "";
}
?>
<html>
<head>
<title>電卓</title>
</head>
<body>

<form method = "POST" action = "calculator1.php">

<input type = "number" name = "number1" size = "10" value = "<?php print $number1; ?>" />

<select name = "kigou">
<option value ="0" <?php if ($kigou == '0'){print 'selected';} ?>> + </option>
<option value ="1" <?php if ($kigou == '1'){print 'selected';} ?>> − </option>
<option value ="2"<?php if ($kigou == '2'){print 'selected';} ?>> × </option>
<option value ="3"<?php if ($kigou == '3'){print 'selected';} ?>> ÷ </option>
</select>

<input type = "number" name = "number2" size = "10" value = "<?php print $number2; ?>" />

<input type = "submit" value = "=" />

<span><?php print $result; ?></span>


</form>
</body>
</html>