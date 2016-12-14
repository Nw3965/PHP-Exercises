<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP</title>
</head>
<body>
<p>
<pre>
<?php 

print ('Now'. date('GAMiminutes') .'');
print("\n");

date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/d H:i:s") . "\n"; //�u2015/03/10 06:00:00�v
echo date("Y/m/01") . "\n"; //�u2015/03/01�v
echo date("Y/m/t") . "\n"; //�u2015/03/31�v

$w = date("w");
$week_name = array("��", "��", "��", "��", "��", "��", "�y");

echo date("Y/m/d") . "($week_name[$w])\n"; //�u2015/03/10(��)�v

?>
</pre>
</p>
</body>
</html>