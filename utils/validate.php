<?php

function validate($fields) {
  $errors = [];
  foreach ($fields as $field) {
    if (!isset($field['id'])) continue;
    $id = $field['id'];

    $value = $_POST[$id];
    

    if ($field['required'] && trim($value) == '') {
      $errors[$id] = 'Kenttä on pakollinen';
    }
    if ($field['type'] == 'riddle' && strcasecmp(trim($value), $field['answer']) != 0) {
      $errors[$id] = $field['errormessage'] ?? 'Väärä vastaus. Luethan ilmoittautumisohjeet tarkemmin!';
    }
  }
  return $errors;
}
?>
