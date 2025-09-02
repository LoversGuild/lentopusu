<?php
require_once('config.php');
require_once('./utils/validate.php');

$errors = validate($fields);

if (count($errors) > 0) {
  require('index.php');
  die();
}
?>
