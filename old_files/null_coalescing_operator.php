<?php

$username = $_GET['user'] ?? 'nobody';
//This is equivalent to
//$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

$username = $_GET['user'] ?? $_POST['user'] ?? 'nobody';

var_dump($username);
