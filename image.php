<?php
  // CREATE IMAGE WITH SIZE 100*30
  $im = imagecreate(120, 20);

  // White BACKGROUND and Blue TEXT
  $bg = imagecolorallocate($im, 255, 255, 255);
  $textcolor = imagecolorallocate($im, 0, 0, 255);
  
  // WRITE STRING INTO IMAGE
  imagestring($im, 5, 0, 0, "inteligencia", $textcolor);
  
  // SEND THE IMAGE
  header("Content-type: image/png");
  imagepng($im);
?>
