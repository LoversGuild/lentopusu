<?php

// Get event id and make sure it contains no slash characters
$event_id = $_GET['event'] ?? throw new RuntimeException("Event ID has not been defined.");
if (preg_match('/^[a-zA-Z0-9-._]+$/', $event_id) !== 1)  {
  throw new RuntimeException("Event ID '{$event_id}' is not valid.");
}

const ConfigPath = "./config/";
$config_file = ConfigPath . $event_id . ".php";

// Set constants
const OutputDir = "/home/rakastajienkilta/.local/state/lentopusu/{$event_id}";
const GPG_HOME = "~/.gnupg";

// Require files the configuration may need
require_once('./utils/translate.php');

// Require real configuration
require_once($config_file);
