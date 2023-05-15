<?php


function input_checker($input_name, $default_value)
{
    $input_value = $_GET[$input_name] ?? $default_value;
    return $input_value;
}


?>