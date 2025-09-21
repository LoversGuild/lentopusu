<?php
$value = $_POST[$field['id']];
switch($field['type']) {
  default:
    if (trim($value) == '') echo '-';
    else echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    break;
  case 'checkbox':
    echo translate($value == "true" ? $field['checkboxlabel'] : No);
    break;
  case 'radio':
    $radioFilled = false;
    foreach($field['choices'] as $key => $labels) {
      if ($key === $value) {
        echo translate($labels);
        $radioFilled = true;
        break;
      }
    }
    if (!$radioFilled) echo '-';
    break;
}
?>
