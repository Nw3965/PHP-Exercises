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

echo date("Y/m/d H:i:s") . "\n"; //「2015/03/10 06:00:00」
echo date("Y/m/01") . "\n"; //「2015/03/01」
echo date("Y/m/t") . "\n"; //「2015/03/31」

$w = date("w");
$week_name = array("日", "月", "火", "水", "木", "金", "土");

echo date("Y/m/d") . "($week_name[$w])\n"; //「2015/03/10(火)」

?>
</pre>
</p>
</body>
</html>