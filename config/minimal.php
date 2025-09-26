<?php
const DisableEncryption = true;

$form_title = [
  'fi' => "Testilomake",
  'en' => 'Testform'
];

$intro = [
'fi' => <<<END
<p>Tämä on testilomake</p>
END,
'en' => <<<END
<p>This is a test form</p>
END
];

$fields = [
  [ "subtitle" => ['fi' => "Henkilötiedot", 'en' => "Identification information"] ],
  [
    "id" => "first_name",
    "name" => ['fi' => "Kutsumanimesi", 'en' => "Your given name"],
    "type" => "text",
    "required" => true,
    "class" => "half-width",
  ],
];
