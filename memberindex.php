<?php
session_start();
$page =@$_GET ['p'];
if (!$page)$page = 'top';
if (!preg_match('/^[a-z]{1,8}$/',$page))exit();
if (!isset($_SESSION['name'])){
$page ='login';
if (isset($_POST['id'])){
if ($_POST['id']=='tanaka'&& $_POST['pw']=='tanaka'){
$_SESSION['name']= 'TANAKA';
$page = 'top';
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>‹äŠy•”</title>
<style>
h1 {
  margin: 0;
}
#header, #footer {
  background-color: #fed;
  height: 60px;
  padding: 10px;
}
#main {
  background-color: #eee;
  padding: 10px;
}


</style>
</head>
<body>
<div id ="header">
<h1>Welcome</h1>
</div>
<div id ="main">
<?php
require "$page.php";
?>
</div>
<div id ="footer">
<a href ="?@=top">TOP PAGE</a>
<a href ="?@=party">PARTY</a>
<a href ="?@=journey">JORNEY</a>
<a href ="?@=logout">LOG OUT</a>
</div>
</body>
</html>
