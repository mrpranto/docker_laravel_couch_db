<?php

if (!function_exists('db_url')) {
    function db_url(): string
    {
        return 'http://'.db_user().':'.db_password().'@127.0.0.1:5984/';
    }
}

if (!function_exists('db')) {
    function db(): string
    {
        return db_url().db_name().'/';
    }
}



