<?php
session_start();
?>
<html>
<head><title>regist.php</title></head>
<body>
<?php
$syouhin = $_POST['syouhin'];
$_SESSION['syouhin'];
print("The next product has been registered<br/>");
?>
<a href=regist_check,php>Checking the product</a>
</body>
</html>
