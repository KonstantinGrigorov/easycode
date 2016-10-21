<?php 
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$x = simplexml_load_file('zp.xml');


foreach ($x->worker as $worker) {
echo "<p><b>Fio:</b>".$worker->fio."</br>".
"<b>birthdate:</b>".$worker->birthdate."</br>".
"<b>department:</b>".$worker->department."</br>".
"<b>position:</b>".$worker->position."</br>".
"<b>paymenttype:</b>".$worker->paymenttype."</br>".
"<b>payment:</b>".$worker->payment;
}


 ?>
 