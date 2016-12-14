<?php
$men = htmlspecialchars($_GET['men']);
$animal=htmlspecialchars($_GET['animal']);
echo" I know that you like noodles {$men}<br>";
echo" I know that you like {$animal}<br>";
?>