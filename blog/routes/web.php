<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/get', function () use ($router) {
    return "This is from get";
});
$router->post('/post', function () use ($router) {
    return "This is from post";
});
$router->put('/put', function () use ($router) {
    return "This is from put";
});
$router->delete('/delete', function () use ($router) {
    return "This is from delete";
});

$router->post('/osman', function () use ($router) {
    return "This is Showkat Osman";
});

$router->post('/{name}/{age}[/{city}]', function($name, $age, $city=null){
    return $name.$age.$city ;
});



