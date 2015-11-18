$dias_no_mes = date("t"); //cal_days_in_month(CAL_GREGORIAN, '11', '2015');

for($dia = 1; $dia <= $dias_no_mes; $dia++)
{
    $timestamp = mktime(0, 0, 0, '02', $dia, '2015');
    $semana    = date("N", $timestamp);
    // echo $semana . '<br>';
    //if($semana < 6) $uteis++;
    if ($semana > 0 && $semana < 6)
    {
        echo '<div style="background-color:black">' . '<strong style="color:#FFFFFF">' . $$dias_da_semana[date("w", $timestamp)] . '</strong>' . '</div>';
    }
    else
    {
        echo '<div style="background-color:red">' . '<strong style="color:#FFFFFF">' . $$dias_da_semana[date("w", $timestamp)] . '</strong>' . '</div>';
    }
}
