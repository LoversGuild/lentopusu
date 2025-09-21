<?php
require_once('./views/summary/data.php');

const Title = ['fi' => 'Tiedot tallennettu!', 'en' => 'Your data has been stored!'];
const ThankYou = [
  'fi' => 'Kiitos ilmoittautumisesta! Ohessa vielä lähettämäsi tiedot. Huomioithan että tietosuojasyistä emme lähetä sinulle automaattista vahvistussähköpostia. Jos haluat tallettaa lähettämäsi tiedot, voit laittaa tämän kiitossivun talteen tai painaa sivun alareunassa olevaa sähköpostinlähetysnappia.',
  'en' => 'Thank you for signing up! Here\'s the answers you sent. Note that for privacy reasons we do not automatically send a confirmation email. If you want to save your answers, you can save this thank you page, or press the send email button at the bottom of the page.'
];
const DoAnother = ['fi' => 'Lähetä toinen ilmoittautuminen.', 'en' => 'Fill out another sign up.'];
const SendConfirmationEmail = ['fi' => 'Lähetä nämä tiedot minulle sähköpostitse', 'en' => 'Send me this summary via email'];

?>
<h1><?= translate(Title) ?></h1>
<p><?= translate(ThankYou) ?></p>
<p><a href="index.php?lang=<?= lang() ?>"><?= translate(DoAnother) ?></a></p>
<form method="POST" action="index.php?lang=<?= lang() ?>">
  <?php renderFieldSummary(false); ?>
  <div class="buttons">
    <button type="submit" name="action" value="email"><?= translate(SendConfirmationEmail); ?></button>
  </div>
</form>
<?php render_template(translate($formTitle));
