<?php
require_once('./utils/translate.php');

const FieldIsRequired = ["fi" => "Kenttä on pakollinen", "en" => "The field is required"];
const DefaultRiddleError = [
  "fi" => "Väärä vastaus. Luethan ilmoittautumisohjeet tarkemmin!",
  "en" => "Wrong answer. Please read the instructions more carefully!"
];

function validate($fields) {
  $errors = [];
  foreach ($fields as $field) {
    if (!isset($field['id'])) continue;
    $id = $field['id'];

    $value = $_POST[$id];
    

    if ($field['required'] && trim($value) == '') {
      $errors[$id] = translate(FieldIsRequired);
    }
    if ($field['type'] == 'riddle' && strcasecmp(trim($value), $field['answer']) != 0) {
      $errors[$id] = translate($field['errormessage'] ?? DefaultRiddleError);
    }
  }
  return $errors;
}
?>
