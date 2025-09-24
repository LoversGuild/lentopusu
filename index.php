<?php

# Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./utils/redirect-http.php');
require_once('config.php');
require_once('./utils/template.php');
require_once('./utils/validate.php');
require_once('./utils/translate.php');

$action = isset($_POST['action']) ? $_POST['action'] : 'form';
$errors = validate($fields);

if (count($errors) > 0) {
  $action = 'form';
}

switch ($action) {
  case 'save':
    require_once('./utils/save_data.php');
    saveData($fields);
    require './views/save.php';
    break;
  case 'summary':
    require('./views/summary.php');
    break;
  case 'form':
    require('./views/form.php');
    break;
  case 'email':
    require_once('./utils/email.php');
    require('./views/email.php');
    break;
  
  default:
    echo 'Unknown action ' . $action;
    break;
}
