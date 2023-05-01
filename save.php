<?php
$data = $_POST['data'];
$file = 'trace.txt';
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
?>
