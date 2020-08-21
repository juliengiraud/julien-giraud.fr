<?php

$fileSrc = 'https://github.com/juliengiraud/Rubik-s_Cube/raw/master/M%C3%A9thode%20Fridrich/M%C3%A9thode_Fridrich.pdf';
$tmpFile = 'guide-methode-fridrich.pdf';
$fileName = 'Guide méthode Fridrich.pdf';

$tmpData = file_get_contents($fileSrc);
file_put_contents($tmpFile, $tmpData);

header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false);
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $fileName . '";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($tmpFile));

readfile($tmpFile);
unlink($tmpFile);

?>
