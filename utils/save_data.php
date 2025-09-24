<?php

require_once('./config.php');

function saveData($fields) {
  global $event;             
  $data = [];
  $data['timestamp'] = gmdate("Y-m-d\TH:i:s\Z");
  $data['event_id'] = $event;
  foreach ($fields as $field) {
    if (!isset($field['id'])) continue;
    $data[$field['id']] = $_POST[$field['id']];
  }

  global $output_dir;
  $email = preg_replace( '/[^a-z0-9@.\-]+/', '-', strtolower($data['email']));
  $filename = 'form-data-' . $data['timestamp'] . '-' . $email . '.json';
  $file = $output_dir . '/' . $filename;

  putenv("GNUPGHOME=" . GPG_HOME);
  $gpg = new gnupg();
  foreach(GPG_RECIPIENTS as $key) {
    $gpg->addencryptkey($key);
  }

  if ($encryptedData = $gpg->encrypt(json_encode($data, JSON_PRETTY_PRINT))) {
    file_put_contents($file, $encryptedData);
  } else {
    $data['encryption_error'] = $gpg->geterror();
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
  }
}
