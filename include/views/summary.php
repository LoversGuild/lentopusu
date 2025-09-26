<?php
require_once('./include/views/summary/data.php');

const EditAnswers = ['fi' => 'Muokkaa vastauksiasi', "en" => "Edit your responses"];
const Submit = ['fi' => 'Lähetä ilmoittautuminen', "en" => "Sign up"];
const SummaryTitle= ['fi' => 'Olet lähettämässä seuraavat tiedot', 'en' => 'You are about to send the following information'];

?>
<h1><?= translate(SummaryTitle) ?></h1>
<form method="POST" action="?event=<?= $event_id ?>&lang=<?= lang() ?>">
  <?php renderFieldSummary(false); ?>
  <div class="buttons">
    <button type="submit" name="action" value="form"><?= translate(EditAnswers); ?></button>
    <button type="submit" name="action" value="save"><?= translate(Submit); ?></button>
  </div>
</form>
<?php render_template(translate($form_title));
