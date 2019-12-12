<?php
  header('Content-Type: application/download');
  header('Content-Disposition: attachment; filename="Sample.mp3"');
  header("Content-Length: " . filesize("Sample.mp3"));
  $fp = fopen("Sample.mp3", "r");
  fpassthru($fp);
  fclose($fp);
?>