<?php
 
// Include Composer autoloader if not already done.
include 'vendor/autoload.php';
 
// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('document.pdf');
 
$text = $pdf->getText();
// echo $text;
// echo gettype($text);
$result =array();
if(preg_match('/(?<=NSW[ ])(\d{4})/', $text, $result)){
 echo 'Postcode: '. $result[0];
};
 
?>