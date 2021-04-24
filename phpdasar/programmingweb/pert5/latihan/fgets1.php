<?php
$file = fopen("test1.txt","w");
echo fgets($file);
fclose($file);
?>
