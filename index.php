<?php
require_once('config.php');
require_once('./utils/template.php');
require_once('./utils/validate.php');

$errors = validate($fields);
if (count($errors) == 0 && !isset($_GET['edit'])) {
  require('./utils/summary.php');
  die();
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  // Do not show errors when nothing has been submitted
  $errors = [];
}

?>
<h1>Ilmoittaudu</h1>
<?= $intro ?>
<form method="POST" action="index.php">
<?php foreach($fields as $field): ?>
  <?php if ($field['subtitle']): ?>
  <h2><?= $field['subtitle'] ?></h2>
  <?php endif; ?>
  <?php if (isset($field['id'])): ?>
  <div class="<?= $field['class'] ?>">
    <label labelFor="<?= $field['id']; ?>">
      <?= $field['name']; ?>
      <?php if ($field['required']): ?> (pakollinen)<?php endif; ?>
    </label>
    <?php require('./utils/field.php'); ?>
    <?php if (isset($field['info'])): ?>
    <div class="info"><?= $field['info']; ?></div>
    <?php endif; ?>
    <?php if (isset($errors[$field['id']])): ?>
    <div class="error"><?= $errors[$field['id']]; ?></div>
    <?php endif; ?>
  </div>
  <?php elseif (isset($field['info'])): ?>
    <div class="info"><?= $field['info']; ?></div>
  <?php endif; ?>
<?php endforeach; ?>
  <div class="buttons">
    <button type="submit">Submit</button>
  </div>
</form>
<?php render_template('Ilmoittautuminen');
