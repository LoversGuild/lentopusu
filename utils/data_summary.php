<?php
require_once('config.php');
require_once('./utils/translate.php');


function renderFieldSummary($email) {
  global $fields;
  foreach($fields as $field):?>
    <?php if (isset($field['subtitle'])): ?>
    <h2><?= translate($field['subtitle']) ?></h2>
    <?php endif; ?>
    <?php if (isset($field['id'])): ?>
    <div class="<?= $field['class'] ?>">
      <?= translate($field['name']); ?>:
      <div className="summary-value">
        <?php require('./utils/field_summary.php'); ?>
      </div>
      <?php if (!$email): ?>
      <input
        type="hidden"
        name="<?= $field['id'] ?>"
        value="<?= htmlspecialchars($_POST[$field['id']], ENT_QUOTES, 'UTF-8') ?>" />
      <?php endif; ?>
    </div>
    <?php endif; ?>
  <?php endforeach;
}
