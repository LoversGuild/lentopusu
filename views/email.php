<?php

const Title = ['fi' => 'Sähköposti lähetetty!', 'en' => 'Email sent!'];
const ThankYou = [
  'fi' => 'Antamistasi tiedot on lähetetty sinulle sähköpostitse antaamasi osoitteeseen.',
  'en' => 'Your information has been sent via email to the address you provided.'
];
const DoAnother = ['fi' => 'Lähetä uusi ilmoittautuminen.', 'en' => 'Fill out another signup.'];

?>
<h1><?= translate(Title) ?></h1>
<p><?= translate(ThankYou) ?></p>
<p><a href="index.php?lang=<?= lang() ?>"><?= translate(DoAnother) ?></a></p>
<?php render_template(translate($form_title));
