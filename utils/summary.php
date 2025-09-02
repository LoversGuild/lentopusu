<?php
require_once('config.php');
require_once('./utils/template.php');
require_once('./utils/translate.php');
require_once('./utils/data_summary.php');

const EditAnswers = ['fi' => 'Muokkaa vastauksiasi', "en" => "Edit response"];
const Submit = ['fi' => 'Ilmoittaudu', "en" => "Sign up"];
const SummaryTitle= ['fi' => 'Olet lähettämässä seuraavat tiedot', 'en' => 'You are sending the following information'];

?>
<h1><?= translate(SummaryTitle) ?></h1>
<form method="POST">
  <?php renderFieldSummary(false); ?>
  <div class="buttons">
    <button type="submit" formaction="index.php?edit&lang=<?= lang() ?>"><?= translate(EditAnswers); ?></button>
    <button type="submit" formaction="save.php?lang=<?= lang() ?>">Lähetä ilmoittautuminen</button>
  </div>
</form>
<?php render_template(translate($formTitle));
