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

?><!DOCTYPE html>
<html>
  <head>
      <title>Ilmoittautuminen</title>
      <style>
        div {
          margin: 1em 0;
        }
        label {
          display: block;
        }
      </style>
  </head>
  <body>
      <h2>Täytä tiedot</h2>
      <form method="POST" action="summary.php">
      <?php foreach($fields as $field): ?>
        <div>
          <label labelFor="<?= $field['id']; ?>"><?= $field['name']; ?></label>
          <?php require('field.php'); ?>
        </div>
      <?php endforeach; ?>
          <button type="submit">Submit</button>
      </form>
  </body>
</html>
