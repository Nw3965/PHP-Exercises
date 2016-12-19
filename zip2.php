<?php
  class ZipArchive2 extends ZipArchive {
    public function addArray($array) {
      foreach ($array as $file) $this->addFile($file);
    }
  }

  $zip = new ZipArchive2();
  $zip->open('test2.zip', ZipArchive::CREATE);
  $zip->addArray(array('zip.php', 'zip2.php'));
  $zip->close();
?>
Finish

