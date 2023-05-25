<?php


function monify($money)
{
    $money = round($money, 2);
    $m = explode('.', $money);
    if (!isset($m[1])) {
        $m[1] = 0;
    }
    return (strlen($m[1]) == 2) ? $m[0] . ',' . $m[1] . ' €' : $m[0] . ',' . $m[1] . '0 €';
}
