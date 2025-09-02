<?php

function lang() {
  return $_GET['lang'] ?? 'fi';
}

function translate($text) {
  if (is_string($text)) return $text;

  $lang = lang();
  return $text[$lang] ?? '!missing translation!';
}
