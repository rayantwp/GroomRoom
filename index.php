<?php

// require "./utils/connect.php";

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case '/' :
    require __DIR__ . '/public/index.php';
    break;
  case '' :
    require __DIR__ . '/public/index.php';
    break;
  case '/login' :
    require __DIR__ . '/public/login.php';
    break;
  case '/applications' :
    require __DIR__ . '/public/applications.php';
    break;
  default:
    http_response_code(404);
    require __DIR__ . '/404.php';
    break;
}