<?php
$zip = new ZipArchive();
$zip ->open('test.zip',ZipArchive::CREATE);
$zip ->addFile('zip.php');
$zip->close();
?>
