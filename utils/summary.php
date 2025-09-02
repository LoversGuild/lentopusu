<?php
require_once('config.php');
require_once('./utils/template.php');
require_once('./utils/translate.php');

const EditAnswers = ['fi' => 'Muokkaa vastauksiasi', "en" => "Edit response"];
const Submit = ['fi' => 'Ilmoittaudu', "en" => "Sign up"];
const SummaryTitle= ['fi' => 'Olet lähettämässä seuraavat tiedot', 'en' => 'You are sending the following information'];

?>
<h1><?= translate(SummaryTitle) ?></h1>
<form method="POST">
<?php foreach($fields as $field):?>
  <?php if ($field['subtitle']): ?>
  <h2><?= translate($field['subtitle']) ?></h2>
  <?php endif; ?>
  <?php if (isset($field['id'])): ?>
  <div class="<?= $field['class'] ?>">
    <?= translate($field['name']); ?>:
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
    <button type="submit" formaction="index.php?edit&lang=<?= lang() ?>"><?= translate(EditAnswers); ?></button>
    <button type="submit" formaction="save.php?lang=<?= lang() ?>">Lähetä ilmoittautuminen</button>
  </div>
</form>
<?php render_template(translate($formTitle));
