<?php

function format_money($money)
{
    $currency_code = "Rp";

    if(!$money) {
        return $currency_code."0.00";
    }

    $money = number_format($money, 2);

    if(strpos($money, '-') !== false) {
        $formatted = explode('-', $money);
        return $currency_code."$formatted[1]";
    }

    return $currency_code."$money";
}