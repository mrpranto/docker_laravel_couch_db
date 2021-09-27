<?php

if (!function_exists('db_name')) {
    function db_name()
    {
        return env('DB_DATABASE');
    }
}

if (!function_exists('db_user')) {
    function db_user()
    {
        return env('DB_USERNAME');
    }
}

if (!function_exists('db_password')) {
    function db_password()
    {
        return env('DB_PASSWORD');
    }
}
