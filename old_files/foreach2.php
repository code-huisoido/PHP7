<?php
//foreach 数据动态更新
$array = [0];

foreach ($array as &$val) {
    var_dump($val);
    $array[1] = 1;
}

var_dump($array);
