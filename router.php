<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/submit-form':
        require 'controllers/form_handler.php';
        break;

    default:
        http_response_code(404);
        echo json_encode(array('error' => 'Page not found'));
        break;
}
