<?php
$file = 'counter.txt'; // 计数器文件
if (!file_exists($file)) {
    $count = 0;
} else {
    $count = file_get_contents($file);
}
$count++;
file_put_contents($file, $count);
echo $count; // 返回当前计数
?>