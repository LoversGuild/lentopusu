<?php

const Title = ['fi' => 'Tapahtui virhe', 'en' => 'An error occured'];
$helpText = ['fi' => "Ilmoittautumisjärjestelmä kaatui. Otathan yhteyttä järjestäjiin.", 'en' => "The signup form has crashed. Please contact the organizers about this."];

?>
<h1><?= translate(Title) ?></h1>
<p><?= translate($helpText) ?></p>
<p>Error: <?= $error ?></p>
<?php render_template(translate(Title));
