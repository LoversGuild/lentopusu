<?php

require_once('./config.php');

function field_to_json(string $type, string $value, bool $optional) {
    switch ($type) {
        case 'number':
            if ($optional && $value === '') {
                return null;
            }
            if (!is_numeric($value)) {
                throw new InvalidArgumentException("Conversion to number failed for value: $value");
            }
            return (int)$value;

        case 'checkbox':
            if ($value === '') {
                return false;
            }
            $result = filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
            if ($result === null) {
                throw new InvalidArgumentException("Conversion to boolean failed for value: $value");
            }
            return $result;

        case 'radio':
        case 'text':
        case 'textarea':
        case 'email':
        case 'riddle':
            return $value;

        default:
            throw new InvalidArgumentException("Invalid type: $type");
    }
}

function saveData($fields) {
  global $event_id;             
  $data = [];
  $data['timestamp'] = gmdate("Y-m-d\TH:i:s\Z");
  $data['event_id'] = $event_id;
  foreach ($fields as $field) {
    if (!isset($field['id'])) continue;
    $id = $field['id'];
    $value = trim($_POST[$id]);
    $data[$id] = field_to_json($field["type"], $value, !$field["required"]);
  }


  $email = preg_replace( '/[^a-z0-9@.\-]+/', '-', strtolower($data['email'] ?? ''));
  $extension = encryptionDisabled() ? '.json' : '.json.gpg';
  $filename = 'form-data-' . $data['timestamp'] . '-' . sha1($email) . $extension;
  $output_dir = OutputPathBase . "/{$event_id}/";
  $file = $output_dir . $filename;

  if (!file_exists($output_dir)) {
    mkdir($output_dir, 0777, true);
  }
  $encryptedData = encryptData(json_encode($data, JSON_PRETTY_PRINT));
  file_put_contents($file, $encryptedData);
}

function encryptData($data) {
  if (encryptionDisabled()) return $data;

  putenv("GNUPGHOME=" . GPG_HOME);
  $gpg = new gnupg();
  foreach(GPG_RECIPIENTS as $key) {
    $gpg->addencryptkey($key);
  }
  if ($encryptedData = $gpg->encrypt(json_encode($data, JSON_PRETTY_PRINT))) {
    return $encryptedData;
  } else {
    throw new RuntimeException("Data encryption error: " . $gpg->geterror());
  }
}

function encryptionDisabled() {
  return defined('DisableEncryption');
}
