<?php
$imageid = $_GET["id"];
$sourcefile = "uploadsimage";
header('Content-Type: image/jpeg');

readfile(''.$kaynakKlasor.'/'.$resimAdresi.'.jpg');
?>