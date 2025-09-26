<?php
const FieldIsRequired = ["fi" => "Kenttä on pakollinen", "en" => "The field is required"];
const FieldNeedsToBeANumber = ["fi" => "Kentän pitää sisältää numero", "en" => "The field needs to contain a number"];
const DefaultRiddleError = [
  "fi" => "Väärä vastaus. Luethan ilmoittautumisohjeet tarkemmin!",
  "en" => "Wrong answer. Please read the signup instructions more carefully!"
];

function validate($fields) {
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return [];
  }

  $errors = [];
  foreach ($fields as $field) {
    if (!isset($field['id'])) continue;
    $id = $field['id'];

    $value = trim($_POST[$id] ?? '');
    

    if ($field['required'] && $value == '') {
      $errors[$id] = translate(FieldIsRequired);
    }
    if ($field['type'] == 'number'
        && preg_match('/^\s*\d+\s*$/', $value) !== 1
        && ($field['required'] || $value == '')) {
      $errors[$id] = translate(FieldNeedsToBeANumber);
    } else if ($field['type'] == 'riddle' && strcasecmp(trim($value), $field['answer']) != 0) {
      $errors[$id] = translate($field['errormessage'] ?? DefaultRiddleError);
    }
  }
  return $errors;
}
?>
