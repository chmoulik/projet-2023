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

function vardump($think)
{
    echo '<b><pre style="border:3px solid black;color:black;padding:10px;background-color:lightgrey;font-size:20px;">';
    var_dump($think);
    echo '</pre></b></p>';
}
