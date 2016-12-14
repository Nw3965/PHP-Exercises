<?php
session_start();
?>
<html>
<head><title>regist_check.php</title></head>
<body>
<?php
print("Registered:<br/>");
print($_SESSION['syouhin']."</br>");
?>
<a href=session.html>Add information</a>
</body>
</html>
