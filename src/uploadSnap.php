<?php
  $imgData = $_POST['imgData'];
  $time = uniqid('', true); //gets time in microseconds

  //Retrieve base64 string only for conversion
  list($type, $imgData) = explode(';', $imgData);
  list(, $imgData)      = explode(',', $imgData);

  $img = base64_decode($imgData);
  $fileDestination = '../uploads/'.$time.'.png';
  file_put_contents($fileDestination, $img);

?>
