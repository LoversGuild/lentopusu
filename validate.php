<?php
require_once('config.php');

foreach ($fields as $field) {
  if (!isset($field['id'])) continue;
  $value = $_POST[$field['id']];
  if ($field['required'] && trim($value) == '') {
    require('index.php');
    die();
  }
}
?>
