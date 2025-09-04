<?php

function lang() {
  return $_GET['lang'] ?? 'fi';
}

function translate($text) {
  if (is_string($text)) return addTargetBlank($text);

  $lang = lang();
  return addTargetBlank($text[$lang] ?? '!missing translation!');
}


function addTargetBlank($html) {
  $dom = new DOMDocument();
  libxml_use_internal_errors(true); // suppress warnings for malformed HTML
  $dom->loadHTML(
    '<div>' . mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8') . '</div>',
    LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
  );

  $links = $dom->getElementsByTagName('a');
  foreach ($links as $link) {
      if (!$link->hasAttribute('target')) {
          $link->setAttribute('target', '_blank');
      }
  }

  $body = $dom->getElementsByTagName('div')->item(0);
  $newHtml = '';
  foreach ($body->childNodes as $child) {
      $newHtml .= $dom->saveHTML($child);
  }

  return $newHtml;
}
