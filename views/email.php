<?php

const Title = ['fi' => 'Sähköposti lähetetty!', 'en' => 'Email sent!'];
const ThankYou = [
  'fi' => 'Antamistasi tiedoista on lähetetty sinulle sähköposti antaamasi osoitteeseen.',
  'en' => 'A summary of your answers has been sent to the email you have given.'
];
const DoAnother = ['fi' => 'Lähetä toinen ilmoittautuminen.', 'en' => 'Fill out another sign up.'];

?>
<h1><?= translate(Title) ?></h1>
<p><?= translate(ThankYou) ?></p>
<p><a href="index.php?lang=<?= lang() ?>"><?= translate(DoAnother) ?></a></p>
<?php render_template(translate($form_title));
