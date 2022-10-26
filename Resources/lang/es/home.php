<?php

declare(strict_types=1);

$def = [];
$def['index'] = include \realpath(__DIR__.'/index.php');
$def['index']['field'] = [
    'address_placeholder' => 'Calle, Cívica, Ciudad, Provincia',
];

return $def;
