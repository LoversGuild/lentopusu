<?php
require_once('config.php');
require_once('validate.php');

?><!DOCTYPE html>
<html>
  <head>
      <title>Ilmoittautuminen</title>
      <style>
        div {
          margin: 1em 0;
        }
      </style>
  </head>
  <body>
      <h1>Olet lähettämässä seuraavat tiedot</h1>
      <form method="POST">
      <?php foreach($fields as $field): ?>
        <div>
          <?= $field['name']; ?>:
          <?= htmlspecialchars($_POST[$field['id']], ENT_QUOTES, 'UTF-8') ?>
          <input
            type="hidden"
            name="<?= $field['id'] ?>"
            value="<?= htmlspecialchars($_POST[$field['id']], ENT_QUOTES, 'UTF-8') ?>" />
        </div>
      <?php endforeach; ?>
          <button type="submit" formaction="index.php">Muokkaa vastauksiasi</button>
          <button type="submit" formaction="save.php">Lähetä ilmoittautuminen</button>
      </form>
  </body>
</html>
