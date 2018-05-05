<?php
    $file1 = 'file1.txt';
    $file2 = 'file2.txt';
    $file3 = 'file3.txt';
    $arr = [$file1, $file2, $file3];
    foreach($arr as $key => $el){
        if(!file_exists($el)){
            array_splice($arr, $key, 1);
        }
    }
    var_dump($arr);
?>
