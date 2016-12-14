<?php
$from ="newuser@localhost";
$to = "newuser@localhost";
$subject ="mail test";
$body = "mail test\nmail test";
mb_send_mail($to,$subject,$body,"From;$from");
?>