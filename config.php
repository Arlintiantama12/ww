<?php
$dataku = mysqli_connect("localhost","root","","cobatoko");

if ($dataku -> connect_errno) {
    echo "Failed to connect to MySQL: " . $dataku -> connect_error;
    exit();
  }
?>
