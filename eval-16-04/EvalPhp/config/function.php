<?php

function redirectToRoute($routes){
    http_response_code(308);
    header("Location: {$routes}");
    exit;
}