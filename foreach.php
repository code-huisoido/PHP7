<?php
//foreach 内部指针不会前进 
$array = [0, 1, 2];
foreach ($array as &$val) {
    var_dump(current($array));
    var_dump($val);
}
