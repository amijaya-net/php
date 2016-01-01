<?php
  include('php-barcode/php-barcode.php');
  
  //http://cariprogram.blogspot.com
  //nuramijaya@gmail.com
  
  $fontSize = 10; // GD1 in px ; GD2 in point
  $marge = 10; // between barcode and hri in pixel
  $x = 125;  // barcode center
  $y = 125;  // barcode center
  $height = 50;  // barcode height in 1D ; module size in 2D
  $width = 2;  // barcode height in 1D ; not use in 2D
  $angle = 0; // rotation in degrees 
  $code = '1234'; // barcode, of course ;)
  $type = 'code39';
  
  $im = imagecreatetruecolor(300, 300);
  $black = ImageColorAllocate($im,0x00,0x00,0x00);
  $white = ImageColorAllocate($im,0xff,0xff,0xff);
  imagefilledrectangle($im, 0, 0, 300, 300, $white);
  
  $data = Barcode::gd($im, $black, $x, $y, $angle, $type,   array('code'=>$code), $width, $height);
  header('Content-type: image/png');
  //imagepng($im, "barcode.png");
  imagepng($im);
  imagedestroy($im);
?>