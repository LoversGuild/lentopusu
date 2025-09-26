<?php
const ConfigPath = "./config";
const GPG_HOME = "~/.gnupg";
const OutputPathBase = "~/.local/state/lentopusu";

require_once('./utils/config.php');

// Get event id and make sure it contains no slash characters
$event_id = $_GET['event'] ?? '';
validateEventId($event_id);
requireConfig($event_id);
