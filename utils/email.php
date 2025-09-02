<?php
require_once('config.php');
require_once('./utils/translate.php');
require_once('./utils/data_summary.php');

$title = translate(['fi' => 'Ilmoittautumisesi', "en" => "Your sign up"]);

ob_start();

echo '<h1'>$title . "</h1>\n";
renderFieldSummary(true);

$body = ob_get_clean();

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'From: no-reply@rakastajienkilta.fi';
$headers[] = 'Content-type: text/html; charset=utf-8';

mail(trim($_POST['email']), $title, $body, implode("\r\n", $headers));
