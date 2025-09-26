<?php
const ConfigPath = "./config";
const GPG_HOME = "~/.gnupg";

require_once('./include/utils/config.php');

// Get event id and make sure it contains no slash characters
$event_id = $_GET['event'] ?? '';
validateEventId($event_id);

require_once(getConfigFilePath($event_id));

if (!defined('OutputPathBase')) {
  define('OutputPathBase', "/home/rakastajienkilta/.local/state/lentopusu");
}
