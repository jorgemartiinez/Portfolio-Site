<?php
$urlTrabajos = __DIR__ . '..\data\trabajos.json';
$data = file_get_contents($urlTrabajos);
$trabajos = json_decode($data, true);
// var_dump($trabajos);
