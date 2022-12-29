<?php
header("Conten-Type:application/zip");
header("Content-Lenght:".filesize($file));
header("Content-Disposition: atttachment;filename=$file");
readfile($file);
?>