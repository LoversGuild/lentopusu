<?php switch($field['type']) {
  case 'riddle':
?>
<input
  type="text"
  name="<?= $field['id'] ?>"
  <?php if ($field['required']): ?>required<?php endif ?>
  value="<?= htmlspecialchars($_POST[$field['id']], ENT_QUOTES, 'UTF-8') ?>" />
<?php
  break;
  case 'text':
  case 'email':
  case 'number':
?>
<input
  type="<?= $field['type'] ?>"
  name="<?= $field['id'] ?>"
  <?php if ($field['required']): ?>required<?php endif ?>
  value="<?= htmlspecialchars($_POST[$field['id']] ?? $field['default'] ?? '', ENT_QUOTES, 'UTF-8') ?>" />
<?php
  break;
  case 'textarea':
?>
<textarea
  name="<?= $field['id'] ?>"
  <?php if ($field['required']): ?>required<?php endif ?>
 ><?= htmlspecialchars($_POST[$field['id']], ENT_QUOTES, 'UTF-8') ?></textarea>
<?php
  break;
  case 'checkbox':
?>
<label>
  <input
    type="checkbox"
    name="<?= $field['id'] ?>"
    <?php if ($field['required']): ?>required<?php endif ?>
    <?php if ($_POST[$field['id']] == 'true'): ?>checked<?php endif ?>
    value="true" />
   <?= $field['checkboxlabel'] ?>
</label>
<?php
  break;
  case 'radio':
?>
<div class="radio">
  <?php foreach($field['choices'] as $choice): ?>
  <label>
    <input
      type="radio"
      name="<?= $field['id'] ?>"
      <?php if ($field['required']): ?>required<?php endif ?>
      <?php if ($_POST[$field['id']] == $choice): ?>checked<?php endif ?>
      value="<?= $choice ?>" />
     <?= $choice ?>
  </label>
  <?php endforeach; ?>
</div>
<?php
  break;
}
?>
