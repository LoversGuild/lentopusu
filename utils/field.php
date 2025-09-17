<?php
require_once('./utils/translate.php');

$id = $field['id'];
$value = isset($_POST[$id]) ? $_POST[$id] : null;

switch($field['type']) {
  case 'riddle':
?>
<input
  type="text"
  name="<?= $id ?>"
  <?php if ($field['required']): ?>required<?php endif ?>
  value="<?= htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8') ?>" />
<?php
  break;
  case 'text':
  case 'email':
  case 'number':
?>
<input
  type="<?= $field['type'] ?>"
  name="<?= $id ?>"
  <?php if ($field['required']): ?>required<?php endif ?>
  value="<?= htmlspecialchars($value ?? $field['default'] ?? '', ENT_QUOTES, 'UTF-8') ?>" />
<?php
  break;
  case 'textarea':
?>
<textarea
  name="<?= $id ?>"
  <?php if ($field['required']): ?>required<?php endif ?>
 ><?= htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
<?php
  break;
  case 'checkbox':
?>
<label>
  <input
    type="checkbox"
    name="<?= $id ?>"
    <?php if ($field['required']): ?>required<?php endif ?>
    <?php if ($value ?? '' == 'true'): ?>checked<?php endif ?>
    value="true" />
   <?= translate($field['checkboxlabel']) ?>
</label>
<?php
  break;
  case 'radio':
?>
<div class="radio">
  <?php foreach($field['choices'] as $key => $labels):
  $translatedChoice = translate($labels);
  ?>
  <label>
    <input
      type="radio"
      name="<?= $id ?>"
      <?php if ($field['required']): ?>required<?php endif ?>
      <?php if (($value ?? '') == $key): ?>checked<?php endif ?>
      value="<?= $key ?>" />
     <?= $translatedChoice ?>
  </label>
  <?php endforeach; ?>
</div>
<?php
  break;
}
?>
