<?php
require_once('./include/views/summary/data.php');

const Title = ['fi' => 'Ilmoittautumisesi on vastaanotettu!', 'en' => 'Your signup has been received!'];
const ThankYou = [
  'fi' => <<<END
    Kiitos ilmoittautumisestasi!
    Alla vielä lähettämäsi tiedot.
    Tietosuojasyistä emme lähetä tietojasi sinulle sähköpostitse automaattisesti.
    Jos haluat tallettaa lähettämäsi tiedot itsellesi, voit tallentaa tämän sivun sisällön tai lähetyttää tiedot antamaasi sähköpostiosoitteeseen sivun lopussa olevalla painikkeella.
END,
  'en' => <<<END
    Thank you for your registration!
    Below are the details you submitted.
    For privacy reasons, we do not automatically send your information to you via email.
    If you want to save the information you provided, you can either save the content of this page or send the details to the email address you provided using the button at the bottom of the page.
END
];
const DoAnother = ['fi' => 'Lähetä uusi ilmoittautuminen.', 'en' => 'Fill out another signup.'];
const SendConfirmationEmail = ['fi' => 'Lähetä nämä tiedot minulle sähköpostitse', 'en' => 'Send me this summary via email'];

?>
<h1><?= translate(Title) ?></h1>
<p><?= translate(ThankYou) ?></p>
<p><a href="?event=<?= $event_id ?>&lang=<?= lang() ?>"><?= translate(DoAnother) ?></a></p>
<form method="POST" action="?event=<?= $event_id ?>&lang=<?= lang() ?>">
  <?php renderFieldSummary(false); ?>
  <div class="buttons">
    <button type="submit" name="action" value="email"><?= translate(SendConfirmationEmail); ?></button>
  </div>
</form>
<?php render_template(translate($form_title));
