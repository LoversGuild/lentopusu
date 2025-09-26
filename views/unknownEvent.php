<?php

const Title = ['fi' => 'Tapahtumaa ei löytynyt', 'en' => 'Event not found'];
if ($event_id) {
  $helpText = ['fi' => "Ilmoittautumisjärjestelmässä ei ole tapahtumaa '$event_id'", 'en' => "The sign up form could not find the given event '$event_id'"];
} else {
  $helpText = ['fi' => "Ei valittua tapahtumaa", 'en' => "No event selected"];
}

?>
<h1><?= translate(Title) ?></h1>
<p><?= translate($helpText) ?></p>
<?php render_template(translate(Title));
