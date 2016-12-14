<form action ="regex2.php" method="post">
zip code <input type ="text" name="zip"><br>
phone number <input type ="text" name ="tel"><br>
e-mail <input type="text" name ="mail"><br>
<input type ="submit" name ="submit">
</form>
<?php
if (isset ($_POST['submit'])){
if (preg_match('/^\d{3}-\d{4}$/', $_POST['zip'])){
echo "zip code<br>";
}
if (preg_mach('/^0\d{1,4}-\d{4}$/',$_POST['tel'])){
echo "Phone number<br>";
}
if (preg_match('/^.+@.+\..+$/', $_POST['mail'])){
echo "e-mail adress<br>";
}
}
?>