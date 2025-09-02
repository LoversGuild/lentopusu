<?php switch($field['type']) {
  case 'text':
  case 'email':
?>
<input
  type="<?= $field['type'] ?>"
  name="<?= $field['id'] ?>"
  <?php if ($field['required']): ?>required<?php endif ?>
  value="<?= htmlspecialchars($_POST[$field['id']], ENT_QUOTES, 'UTF-8') ?>" />
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
}
?>
