<?php
include 'RestApi.php';

$api = new RestApi('print_r');

$api->bind('post', function($data)
{
    return $data;
})->bind('get', function($data, $e)
{
    RestApi::raise(404, "Nooot Founds");
})->bind('put', function($data)
{
    return $data;
})->handle();
?>
