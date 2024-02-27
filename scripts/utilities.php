<?php

function calcDiscount ($list_price, $discount_percent){
    return $list_price * $discount_percent * 0.01;
}
;

function cleanIO($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
;