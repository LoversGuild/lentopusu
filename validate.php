<?php
require_once('config.php');

foreach ($fields as $field) {
  $value = $_POST[$field['id']];
  if ($field['required'] && trim($value) == '') {
    require('index.php');
    die();
  }
}
?>
