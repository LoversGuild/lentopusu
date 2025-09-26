<?php

$notLocalhost = $_SERVER['HTTP_HOST'] !== 'localhost' &&
  $_SERVER['HTTP_HOST'] !== '127.0.0.1';
$unsecure = empty($_SERVER['HTTPS']) ||
  $_SERVER['HTTPS'] === 'off';

if ($unsecure && $notLocalhost) {
  $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  header('Location: ' . $redirect);
  exit();
}
