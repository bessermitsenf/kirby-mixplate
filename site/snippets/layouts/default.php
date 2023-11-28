<!doctype html>
<html <?= attributes([
  'lang' => locale_get_primary_language($kirby->languageCode() ?? option('locale', 'en')),
  'data-debug' => option('debug'),
]) ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover">

  <?php snippet('meta') ?>

  <link rel="apple-touch-icon" href="<?= url('touch-icon-192x192.png') ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= url('touch-icon-192x192.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= url('favicon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= url('favicon-16x16.png') ?>">

  <?= vite()->css('js/index.js') ?>
  <?= vite()->js('js/index.js', ['defer' => true]) ?>

  <?= stack('head') ?>
</head>

<body class="font-sans text-base" data-theme="default">
  <?= $slot ?>
</body>
</html>
