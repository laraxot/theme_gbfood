<?php

$def = [];
$def['index'] = include \realpath(__DIR__.'/index.php');
$def['index']['field'] = [
    'address_placeholder' => 'Street, Street number, City, Province',
];

return $def;
