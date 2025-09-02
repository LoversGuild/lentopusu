<?php
  ob_start();

  function render_template($title) {
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

