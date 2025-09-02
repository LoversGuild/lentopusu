<?php
require_once('config.php');

function save($data) {
  $file = OutputFile;
  // If file exists, load existing data
  if (file_exists($file)) {
      $json = file_get_contents($file);
      $arr = json_decode($json, true);
      if (!is_array($arr)) {
          $arr = [];
      }
  } else {
      $arr = [];
  }

  // Add new entry
  $arr[] = $data;

  // Save back to file
  file_put_contents($file, json_encode($arr, JSON_PRETTY_PRINT));
}

$data = [];
foreach ($fields as $field) {
  $data[$field['id']] = $_POST[$field['id']];
}
save($data);

?><!DOCTYPE html>
<html>
  <head>
      <title>Ilmoittautuminen</title>
  </head>
  <body>
      <h1>Tiedot tallennettu!</h1>
      <p>Kiitos ilmoittautumisesta!</p>
  </body>
</html>
