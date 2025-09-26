<?php
const ConfigPath = "./config";
const GPG_HOME = "~/.gnupg";
const OutputPathBase = "/home/rakastajienkilta/.local/state/lentopusu";

require_once('./include/utils/config.php');

// Get event id and make sure it contains no slash characters
$event_id = $_GET['event'] ?? '';
validateEventId($event_id);

require_once(getConfigFilePath($event_id));
