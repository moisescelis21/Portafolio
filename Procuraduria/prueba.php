<?php
$mes = 8;
$ano = 2023;
$lunes = 0;
$dia2 = 1;
$maximodias = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
while ($dia2 < $maximodias) {
    $dia3 = utf8_encode(strftime("%A", strtotime($ano . '-' . $mes . '-' . $dia2)));
    $dia2++;
    echo $dia3;

    if ($dia3 == "Monday") {
        $lunes++;
    }
}
echo $lunes;
?>