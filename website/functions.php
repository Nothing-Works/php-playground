<?php

function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

function urlIs ($val) {
    return $_SERVER['REQUEST_URI'] === $val;
}