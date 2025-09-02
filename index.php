<?php
require_once('config.php');
require_once('./utils/template.php');

function save($data) {
  $file = OutputFile;
  // If file exists, load existing data
  if (file_exists($file)) {
      $json = file_get_contents($file);
      $arr = json_decode($json, true);
      if (!is_array($arr)) {
          $arr = [];
      }
  } else {
      $arr = [];
  }

  // Add new entry
  $arr[] = $data;

  // Save back to file
  file_put_contents($file, json_encode($arr, JSON_PRETTY_PRINT));
}

?>
<h1>Ilmoittaudu</h1>
<?= $intro ?>
<form method="POST" action="summary.php">
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
  </div>
  <?php endif; ?>
<?php endforeach; ?>
  <div class="buttons">
    <button type="submit">Submit</button>
  </div>
</form>
<?php render_template('Ilmoittautuminen');
