<?php
$file = 'visits.txt'; // 访问量文件
if (!file_exists($file)) {
    $handle = fopen($file, 'w');
    fwrite($handle, 0);
    fclose($handle);
}
 
$handle = fopen($file, 'r+');
$visits = fread($handle, filesize($file));
$visits++;
ftruncate($handle, 0); // 重置文件大小
rewind($handle); // 移动文件指针到文件开始
fwrite($handle, $visits); // 写入新的访问量
fclose($handle);
?>
