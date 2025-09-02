<?php
require_once('./utils/translate.php');
const No = ["fi" => "Ei", "en" => "No"];

$value = $_POST[$field['id']];
switch($field['type']) {
  default:
    if (trim($value) == '') echo '-';
    else echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    break;
  case 'checkbox':
    echo translate($value == "true" ? $field['checkboxlabel'] : No);
    break;
}
?>
