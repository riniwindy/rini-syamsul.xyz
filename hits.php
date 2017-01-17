<?php
$fp = fopen("hits.txt", "r");
$count = fread($fp, 1024);
fclose($fp);
$count = $count + 1;
echo $count;
$fp = fopen("hits.txt", "w");
fwrite($fp, $count);
fclose($fp);
?>
