<?php

class A {private $x = 1;}

//PHP7 之前版本的代码
$getXCB = function() {return $this->x;};
$getX = $getXCB->bindTo(new A, 'A');
echo $getX();
  
//PHP7+
$getX = function() {return $this->x;};
echo $getX->call(new A);
