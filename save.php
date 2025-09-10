<?php

# Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.php');
require_once('./utils/template.php');
require_once('./utils/validate.php');
require_once('./utils/translate.php');

$errors = validate($fields);

if (count($errors) > 0) {
  require('index.php');
  die();
}

function save($data) {
  $email = preg_replace( '/[^a-z0-9@.\-]+/', '-', strtolower($data['email']));
  $filename = 'form-data-' . $data['timestamp'] . '-' . $email . '.json';
  $file = OutputDir . $filename;

  putenv("GNUPGHOME=" . GPG_HOME);
  $gpg = new gnupg();
  foreach(GPG_RECIPIENTS as $key) {
    $gpg->addencryptkey($key);
  }

  if ($encryptedData = $gpg->encrypt(json_encode($data, JSON_PRETTY_PRINT))) {
    file_put_contents($file, $encryptedData);
  } else {
    $data['encryption_error'] = $gpg->geterror();
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
  }
}

$data = [];
$data['timestamp'] = gmdate("Y-m-d\TH:i:s\Z");
foreach ($fields as $field) {
  if (!isset($field['id'])) continue;
  $data[$field['id']] = $_POST[$field['id']];
}
save($data);
require_once('./utils/email.php');

const Title = ['fi' => 'Tiedot tallennettu!', 'en' => 'Your data has been stored!'];
const ThankYou = ['fi' => 'Kiitos ilmoittautumisesta!', 'en' => 'Thank you for signing up!'];

?>
<h1><?= translate(Title) ?></h1>
<p><?= translate(ThankYou) ?></p>
<?php render_template(translate($formTitle));
