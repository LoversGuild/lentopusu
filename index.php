<?php

# Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.php');
require_once('./utils/template.php');
require_once('./utils/validate.php');
require_once('./utils/translate.php');


$errors = validate($fields);
if (count($errors) == 0 && !isset($_GET['edit'])) {
  require('./utils/summary.php');
  die();
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  // Do not show errors when nothing has been submitted
  $errors = [];
}

const Required = ['fi' => 'pakollinen', 'en' => 'required'];
const Submit = ['fi' => 'Lähetä', 'en' => 'Submit'];

?>
<h1><?= translate($formTitle); ?></h1>
<?= translate($intro); ?>
<form method="POST" action="index.php?lang=<?= lang() ?>">
<?php foreach($fields as $field): ?>
  <?php if ($field['subtitle']): ?>
  <h2><?= translate($field['subtitle']) ?></h2>
  <?php endif; ?>
  <?php if (isset($field['id'])): ?>
  <div class="<?= $field['class'] ?>">
    <label labelFor="<?= $field['id']; ?>">
      <?= translate($field['name']); ?>
      <?php if ($field['required']): ?> (<?= translate(Required); ?>)<?php endif; ?>
    </label>
    <?php require('./utils/field.php'); ?>
    <?php if (isset($field['info'])): ?>
    <div class="info"><?= translate($field['info']); ?></div>
    <?php endif; ?>
    <?php if (isset($errors[$field['id']])): ?>
    <div class="error"><?= translate($errors[$field['id']]); ?></div>
    <?php endif; ?>
  </div>
  <?php elseif (isset($field['info'])): ?>
    <div class="info"><?= translate($field['info']); ?></div>
  <?php endif; ?>
<?php endforeach; ?>
  <div class="buttons">
    <button type="submit"><?= translate(Submit) ?></button>
  </div>
</form>
<?php render_template(translate($formTitle));
