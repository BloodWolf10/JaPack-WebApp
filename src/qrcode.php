<?php
// Include the PHP QR Code library
require_once 'vendor/autoload.php';  // Correctly loading the Composer autoloader

// Use the correct namespace
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

// Data to be encoded in the QR code
$data = 'http://localhost/aboutus';

// Path to save the generated QR code image
$file = './Images/gallery/aboutus.png';

// QR code options (optional)
$options = new QROptions([
    'version'    => 5,              // QR code version (1-40)
    'eccLevel'   => QRCode::ECC_L,  // Error correction level (L, M, Q, H)
    'outputType' => 'png',          // Output type (use 'png', 'jpg', etc.)
    'scale'      => 10,             // Size of the QR code
]);

// Generate the QR code and save it as an image file
$qrcode = new QRCode($options);
$qrcode->render($data, $file);

// Output success message
//echo 'QR code has been generated and saved as: ' . $file;
?>
