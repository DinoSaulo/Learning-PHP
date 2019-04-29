<?php

date_default_timezone_set('America/Recife');

echo date('d/m/y');
echo "<br>";
echo date('D/M/Y');
echo "<br>";
echo date('H:i:s');
echo "<br>";
echo date('h:i:s A');
echo "<hr>";

$date = date('Y-m-d'); // DATE
$datetime = date('Y-m-d H:i:s'); // DATETIME
echo $datetime;
echo "<br>";
// TIME
$time = time();
echo date('d/m/Y', $time);
echo "<br>";

// MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m/y - h:i', $data_pagamento);
echo "<hr>";

$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo date('d/m/Y', $data);