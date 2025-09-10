<?php
ob_start();

function languageLink($langValue, $uri_param = null) {
  // Current path + query
  $uri = $uri ?? $_SERVER['REQUEST_URI'];

  $parsedUrl = parse_url($uri);
  // Parse query string into array
  $query = [];
  if (isset($parsedUrl['query'])) {
    parse_str($parsedUrl['query'], $query);
  }
  $query['lang'] = $langValue;

  // Build relative URL (path + query)
  return ($parsedUrl['path'] ?? '/') . '?' . http_build_query($query);
}


function render_template($title, $allow_translating = false) {
  $lang = lang();
  $body = ob_get_clean();
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/main.css" type="text/css" />
    <link rel="stylesheet" href="./form.css" type="text/css" />
  </head>
  <body>
    <header id="mainheader" data-nosnippet>
      <nav class="menu">
        <a id="sitename" href="./">
          <img src="/img/logo_white_small.png" alt="" />Rakastajien kilta</a>
        <?php if ($allow_translating): ?>
        <div id="languages">
          <?php if ($lang !== 'fi'): ?>
          <a href="<?= languageLink('fi') ?>">Suomeksi</a>
          <?php endif; ?>
          <?php if ($lang !== 'en'): ?>
          <a href="<?= languageLink('en') ?>">In English</a>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </nav>
      <div class="menu0"></div>
    </header>
    <main>
      <?= $body ?>
    </main>
    <footer>
      <p>
        <span>
          © 2018–<?= date("Y") ?>
          <a href="/">Rakastajien kilta</a>
        </span>
      </p>
      <p class="cc-licence">
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img id="licence-img" alt="Creative
Commons -lisenssin
logo" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a>
        Tämän sivuston sisältö on lisensoitu
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative
Commons Attribution-NonCommercial-ShareAlike 4.0 kansainvälisellä
lisenssillä</a>        aina, kun muuta ei ole mainittu.      </p>
    </footer>
  </body>
</html><?php
}

