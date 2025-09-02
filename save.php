<?php
require_once('config.php');
require_once('./utils/template.php');
require_once('./utils/validate.php');
$errors = validate($fields);

if (count($errors) > 0) {
  require('index.php');
  die();
}

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
$data['timestamp'] = gmdate("Y-m-d\TH:i:s\Z");
foreach ($fields as $field) {
  if (!isset($field['id'])) continue;
  $data[$field['id']] = $_POST[$field['id']];
}
save($data);

?>
<h1>Tiedot tallennettu!</h1>
<p>Kiitos ilmoittautumisesta!</p>
<?php render_template('Ilmoittautuminen');
