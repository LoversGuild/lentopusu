<?php
require_once('./views/summary/data.php');

$title = translate(['fi' => 'Ilmoittautumisesi', "en" => "Your signup"]);

ob_start();

echo '<h1'>$title . "</h1>\n";
renderFieldSummary(true);

$body = ob_get_clean();

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'From: Kirjekyyhky <kirjekyyhky@rakastajienkilta.fi>';
$headers[] = 'Content-type: text/html; charset=utf-8';

mail(trim($_POST['email']), $title, $body, implode("\r\n", $headers));
