<?php

include_once dirname(__FILE__) . '/src/class/pctrplatform/Platform.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/style_media.css" />
    <link rel="stylesheet" href="./css/tabtest.css" />
    <link rel="stylesheet" href="./css/pathtest.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
</head>
<body>
    <section class="firstsection">
        <h1>Platform</h1>
        <?php $test1 = new Platform(); ?>
        <div class="table_value">
          <label>name :</label><p><?= $test1->getName()->name ?></p>
          <label>SepAntislash :</label><p><?= $test1->isSepAntislash() ? "true": "false" ?></p>
          <label>Win :</label><p><?= $test1->iswin() ? "true": "false" ?></p>
          <label>php_os :</label><p><?= $test1->php_os() ?></p>
        </div>
    </section>
  </body>
</html>
