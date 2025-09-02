<?php
$value = $_POST[$field['id']];
switch($field['type']) {
  default:
    if (trim($value) == '') echo '-';
    else echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    break;
  case 'checkbox':
    echo $value == "true" ? $field['checkboxlabel'] : 'Ei';
    break;
}
?>
