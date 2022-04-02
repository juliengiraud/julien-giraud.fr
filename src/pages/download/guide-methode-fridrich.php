<?php

$file_src = 'https://github.com/juliengiraud/Methode-Fridrich/raw/main/M%C3%A9thode_Fridrich.pdf';
$file_name = 'Guide méthode Fridrich.pdf';

$file_content = file_get_contents($file_src);

header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false);
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $file_name . '";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . strlen($file_content));

print($file_content);
