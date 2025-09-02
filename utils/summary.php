<?php
require_once('config.php');
require_once('./utils/template.php');

?>
<h1>Olet lähettämässä seuraavat tiedot</h1>
<form method="POST">
<?php foreach($fields as $field):?>
  <?php if ($field['subtitle']): ?>
  <h2><?= $field['subtitle'] ?></h2>
  <?php endif; ?>
  <?php if (isset($field['id'])): ?>
  <div class="<?= $field['class'] ?>">
    <?= $field['name']; ?>:
    <div className="summary-value">
      <?php require('./utils/field_summary.php'); ?>
    </div>
    <input
      type="hidden"
      name="<?= $field['id'] ?>"
      value="<?= htmlspecialchars($_POST[$field['id']], ENT_QUOTES, 'UTF-8') ?>" />
  </div>
  <?php endif; ?>
<?php endforeach; ?>
  <div class="buttons">
    <button type="submit" formaction="index.php?edit">Muokkaa vastauksiasi</button>
    <button type="submit" formaction="save.php">Lähetä ilmoittautuminen</button>
  </div>
</form>
<?php render_template('Ilmoittautuminen');
