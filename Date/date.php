<?php
/*https://www.php.net/manual/pt_BR/function.date.php
https://www.php.net/manual/pt_BR/class.dateinterval.php
*/
$data = new DateTime();

//formatada

echo 'Data formatada ' . $data-> format('d-m-Y') . PHP_EOL; 
echo 'Data formatada ' . $data-> format('d-m-Y H:i:s') . PHP_EOL; 
//var_dump($data);


//DateInterval e dateTime
$intervalo = new DateInterval('P5Y10M5DT10H50M10S'); //subtrai anos meses dias horas seg
$data->sub($intervalo);
//$intervalo = new DateInterval('PT5M'); //adiciona intervalo de 5 min
//$data->add($intervalo);
var_dump($data);