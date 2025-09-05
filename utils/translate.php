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
    // Wrap the input in a <html> as libxml cannot handle plain text. Also fix UTF-8 problems by defining charset.
    $wrappedHtml = '<html><meta charset="utf-8" /><body>' . $html . '</body></html>';    

    $dom = new DOMDocument();
    
    // Load the wrapped HTML
    if (!@$dom->loadHTML($wrappedHtml, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD)) {
        throw new RuntimeException('Malformed HTML encountered.');
    }

    $links = $dom->getElementsByTagName('a');
    foreach ($links as $link) {
        if (!$link->hasAttribute('target')) {
            $link->setAttribute('target', '_blank');
        }
    }

  // Remove the wrapping
  $body = $dom->getElementsByTagName('body')->item(0);
  $newHtml = '';
  foreach ($body->childNodes as $child) {
      $newHtml .= $dom->saveHTML($child);
  }

  return $newHtml;
}
