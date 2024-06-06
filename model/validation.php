<?php
function stringValidation($input)
{
    $pattern = '/^[a-zA-Z0-9]+$/';
    return preg_match($pattern, $input);
}
function emailValidation($input)
{
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    return preg_match($pattern, $input);
}
function passwordValidation($input)
{
    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{6,12}$/';
    return preg_match($pattern, $input);
}
