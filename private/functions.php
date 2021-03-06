<?php

function u($string = "")
{
    return urlencode($string);
}

function h($string = "")
{
    return htmlspecialchars($string);
}

function redirect_to($location)
{
    header("Location: " . $location);
    exit;
}

function is_post_request()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request()
{
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}