<?php

function validateEventId($event_id) {
  if ($event_id === '') {
    throw new RuntimeException("Event ID has not been defined.");
  }
  // Make sure event id contains no slash characters
  if (preg_match('/^[a-zA-Z0-9-._]+$/', $event_id) !== 1)  {
    throw new RuntimeException("Event ID '{$event_id}' is not valid.");
  }
}

function getConfigFilePath($event_id) {
  $config_file = ConfigPath . '/' . $event_id . ".php";
  if (!file_exists($config_file)) {
    throw new RuntimeException("No config for this event");
  }
  return $config_file;
}
