<?php
require_once('config.php');
require_once('./utils/translate.php');

$title = translate(['fi' => 'Ilmoittautumisesi', "en" => "Your sign up"]);
const No = ["fi" => "Ei", "en" => "No"];

ob_start();

echo $title . "\n\n";
foreach($fields as $field):
?>

<?php if ($field['subtitle']): ?>
=== <?= translate($field['subtitle']) ?> ===

<?php endif; ?>
<?php if (isset($field['id'])): ?>
<?= translate($field['name']); ?>:
<?php
$value = $_POST[$field['id']];
switch($field['type']) {
  default:
    if (trim($value) == '') echo '-';
    else echo $value;
    break;
  case 'checkbox':
    echo translate($value == "true" ? $field['checkboxlabel'] : No);
    break;
}
?>

<?php endif; ?>
<?php endforeach;

$body = ob_get_clean();

mail(trim($_POST['email']), $title, $body, 'From: no-reply@rakastajienkilta.fi');
