<?php
const Required = ['fi' => 'pakollinen', 'en' => 'required'];
const Submit = ['fi' => 'Lähetä', 'en' => 'Submit'];

?>
<h1><?= translate($form_title); ?></h1>
<?= translate($intro); ?>
<form method="POST" action="?event=<?= $event_id ?>&lang=<?= lang() ?>">
<?php foreach($fields as $field): ?>
  <?php if (isset($field['subtitle'])): ?>
  <h2><?= translate($field['subtitle']) ?></h2>
  <?php endif; ?>
  <?php if (isset($field['id'])): ?>
    <div <?php if (isset($field['class'])): ?>class="<?= $field['class'] ?>"<?php endif; ?>>
    <label labelFor="<?= $field['id']; ?>">
      <?= translate($field['name']); ?>
      <?php if ($field['required']): ?> (<?= translate(Required); ?>)<?php endif; ?>
    </label>
    <?php require('./views/field.php'); ?>
    <?php if (isset($field['info'])): ?>
    <div class="info"><?= translate($field['info']); ?></div>
    <?php endif; ?>
    <?php if (isset($errors[$field['id']])): ?>
    <div class="error"><?= translate($errors[$field['id']]); ?></div>
    <?php endif; ?>
  </div>
  <?php elseif (isset($field['info'])): ?>
    <div class="info"><?= translate($field['info']); ?></div>
  <?php endif; ?>
<?php endforeach; ?>
  <div class="buttons">
    <button type="submit" name="action" value="summary"><?= translate(Submit) ?></button>
  </div>
</form>
<?php render_template(translate($form_title), true);
