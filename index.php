<?php

# Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./include/utils/redirect_http.php');
require_once('./include/utils/translate.php');
require_once('./include/utils/template.php');

try {
  require_once('config.php');
} catch (Exception) {
  require './include/views/unknown_event.php';
  die();
}

require_once('./include/utils/validate.php');

$action = isset($_POST['action']) ? $_POST['action'] : 'form';
$errors = validate($fields);

if (count($errors) > 0) {
  $action = 'form';
}

switch ($action) {
  case 'save':
    require_once('./include/utils/save_data.php');
    saveData($fields);
    require './include/views/save.php';
    break;
  case 'summary':
    require('./include/views/summary.php');
    break;
  case 'form':
    require('./include/views/form.php');
    break;
  case 'email':
    require_once('./utils/email.php');
    require('./include/views/email.php');
    break;
  
  default:
    echo 'Unknown action ' . $action;
    break;
}
